<?php

namespace App\Http\Controllers;

use App\Models\TriviaAlternative;
use App\Models\TriviaCategory;
use App\Models\TriviaQuestion;
use App\Services\DashboardSuperadmin;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class SuperadminController extends Controller
{
    public function __construct(private readonly DashboardSuperadmin $dashboardSuperadmin) {}

    public function status(Request $request): JsonResponse
    {
        if ($response = $this->authorizeSuperadmin($request)) return $response;

        try {
            $appPath = $this->botAppPath();
            if (! $appPath) return response()->json(['message' => 'Bot application files are not available.'], 503);

            return response()->json([
                'checked_at' => now()->toIso8601String(),
                'processes' => [
                    'app' => $this->processStatus($appPath, 'app'),
                    'scheduler' => $this->processStatus($appPath, 'scheduler'),
                ],
            ]);
        } catch (Throwable $error) {
            Log::error('Could not load bot process status for dashboard superadmin.', ['message' => $error->getMessage()]);
            return response()->json(['message' => 'Could not load bot process status.'], 500);
        }
    }

    public function logs(Request $request, string $process): JsonResponse
    {
        if ($response = $this->authorizeSuperadmin($request)) return $response;
        if (! in_array($process, ['app', 'scheduler'], true)) {
            return response()->json(['message' => 'Choose a valid bot process.'], 422);
        }

        try {
            $appPath = $this->botAppPath();
            if (! $appPath) return response()->json(['message' => 'Bot application files are not available.'], 503);

            $configuredLogDir = trim((string) config('services.bot_log_dir', 'logs')) ?: 'logs';
            $logRoot = realpath($appPath.DIRECTORY_SEPARATOR.$configuredLogDir);
            if (! $logRoot || ! is_dir($logRoot)) {
                return response()->json(['process' => $process, 'date' => null, 'lines' => [], 'available' => false]);
            }

            $dateDirectories = array_values(array_filter(
                glob($logRoot.DIRECTORY_SEPARATOR.'*', GLOB_ONLYDIR) ?: [],
                static fn (string $path): bool => preg_match('/^\d{8}$/', basename($path)) === 1
            ));
            rsort($dateDirectories, SORT_STRING);

            foreach ($dateDirectories as $dateDirectory) {
                $candidate = realpath($dateDirectory.DIRECTORY_SEPARATOR.$process.'.log');
                if (! $candidate || ! is_file($candidate) || ! is_readable($candidate)) continue;
                if (! str_starts_with($candidate, $logRoot.DIRECTORY_SEPARATOR)) continue;

                return response()->json([
                    'process' => $process,
                    'date' => basename($dateDirectory),
                    'lines' => $this->tailLines($candidate, 30),
                    'available' => true,
                ]);
            }

            return response()->json(['process' => $process, 'date' => null, 'lines' => [], 'available' => false]);
        } catch (Throwable $error) {
            Log::error('Could not load bot logs for dashboard superadmin.', [
                'process' => $process,
                'message' => $error->getMessage(),
            ]);
            return response()->json(['message' => 'Could not load bot logs.'], 500);
        }
    }

    public function triviaReview(Request $request): JsonResponse
    {
        if ($response = $this->authorizeSuperadmin($request)) return $response;

        try {
            return response()->json([
                'categories' => TriviaCategory::query()
                    ->where('approved', false)
                    ->orderBy('created_at')
                    ->get(['id', 'created_by', 'created_at', 'locale', 'short_description', 'description']),
                'questions' => TriviaQuestion::query()
                    ->where('approved', false)
                    ->with([
                        'triviaCategory:id,locale,description,approved',
                        'alternatives:id,question,description,correct_answer',
                    ])
                    ->orderBy('created_at')
                    ->get(['id', 'created_by', 'created_at', 'category', 'question', 'difficulty', 'explanation'])
                    ->map(static fn (TriviaQuestion $question): array => [
                        'id' => (string) $question->id,
                        'created_by' => (string) $question->created_by,
                        'created_at' => $question->created_at,
                        'question' => (string) $question->question,
                        'difficulty' => (int) $question->difficulty,
                        'explanation' => $question->explanation,
                        'category' => $question->triviaCategory ? [
                            'id' => (string) $question->triviaCategory->id,
                            'locale' => (string) $question->triviaCategory->locale,
                            'description' => (string) $question->triviaCategory->description,
                            'approved' => (bool) $question->triviaCategory->approved,
                        ] : null,
                        'alternatives' => $question->alternatives->map(static fn (TriviaAlternative $alternative): array => [
                            'id' => (string) $alternative->id,
                            'description' => (string) $alternative->description,
                            'correct_answer' => (bool) $alternative->correct_answer,
                        ])->all(),
                    ])->all(),
            ]);
        } catch (Throwable $error) {
            Log::error('Could not load trivia approval queue.', ['message' => $error->getMessage()]);
            return response()->json(['message' => 'Could not load trivia submissions.'], 500);
        }
    }

    public function approveTriviaCategory(Request $request, string $categoryId): JsonResponse
    {
        if ($response = $this->authorizeSuperadmin($request)) return $response;

        try {
            $category = TriviaCategory::query()->findOrFail($categoryId);
            $category->approved = true;
            $category->save();
            Log::info('Superadmin approved trivia category.', [
                'category_id' => $categoryId,
                'discord_user_id' => (string) $request->attributes->get('dashboard.session')['identity']['id'],
            ]);
            return response()->json(['ok' => true]);
        } catch (Throwable $error) {
            Log::error('Could not approve trivia category.', ['category_id' => $categoryId, 'message' => $error->getMessage()]);
            return response()->json(['message' => 'Could not approve trivia category.'], 500);
        }
    }

    public function rejectTriviaCategory(Request $request, string $categoryId): JsonResponse
    {
        if ($response = $this->authorizeSuperadmin($request)) return $response;

        try {
            $category = TriviaCategory::query()->findOrFail($categoryId);
            if ($category->approved) return response()->json(['message' => 'Approved categories cannot be rejected from the pending queue.'], 409);
            if (TriviaQuestion::query()->where('category', $categoryId)->where('approved', true)->exists()) {
                return response()->json(['message' => 'A category with an approved question cannot be rejected.'], 409);
            }

            DB::transaction(function () use ($category): void {
                $questionIds = TriviaQuestion::query()->where('category', $category->id)->pluck('id');
                TriviaAlternative::query()->whereIn('question', $questionIds)->delete();
                TriviaQuestion::query()->whereIn('id', $questionIds)->delete();
                $category->delete();
            });

            Log::info('Superadmin rejected trivia category.', [
                'category_id' => $categoryId,
                'discord_user_id' => (string) $request->attributes->get('dashboard.session')['identity']['id'],
            ]);
            return response()->json(['ok' => true]);
        } catch (Throwable $error) {
            Log::error('Could not reject trivia category.', ['category_id' => $categoryId, 'message' => $error->getMessage()]);
            return response()->json(['message' => 'Could not reject trivia category.'], 500);
        }
    }

    public function approveTriviaQuestion(Request $request, string $questionId): JsonResponse
    {
        if ($response = $this->authorizeSuperadmin($request)) return $response;

        try {
            $question = TriviaQuestion::query()->with(['triviaCategory', 'alternatives'])->findOrFail($questionId);
            if (! $question->triviaCategory?->approved) {
                return response()->json(['message' => 'Approve the question category before approving this question.'], 409);
            }
            if ($question->alternatives->count() !== 4 || $question->alternatives->where('correct_answer', true)->count() !== 1) {
                return response()->json(['message' => 'This question must have exactly four alternatives and one correct answer.'], 409);
            }

            $question->approved = true;
            $question->save();
            Log::info('Superadmin approved trivia question.', [
                'question_id' => $questionId,
                'discord_user_id' => (string) $request->attributes->get('dashboard.session')['identity']['id'],
            ]);
            return response()->json(['ok' => true]);
        } catch (Throwable $error) {
            Log::error('Could not approve trivia question.', ['question_id' => $questionId, 'message' => $error->getMessage()]);
            return response()->json(['message' => 'Could not approve trivia question.'], 500);
        }
    }

    public function rejectTriviaQuestion(Request $request, string $questionId): JsonResponse
    {
        if ($response = $this->authorizeSuperadmin($request)) return $response;

        try {
            $question = TriviaQuestion::query()->findOrFail($questionId);
            if ($question->approved) return response()->json(['message' => 'Approved questions cannot be rejected from the pending queue.'], 409);

            DB::transaction(function () use ($question): void {
                TriviaAlternative::query()->where('question', $question->id)->delete();
                $question->delete();
            });

            Log::info('Superadmin rejected trivia question.', [
                'question_id' => $questionId,
                'discord_user_id' => (string) $request->attributes->get('dashboard.session')['identity']['id'],
            ]);
            return response()->json(['ok' => true]);
        } catch (Throwable $error) {
            Log::error('Could not reject trivia question.', ['question_id' => $questionId, 'message' => $error->getMessage()]);
            return response()->json(['message' => 'Could not reject trivia question.'], 500);
        }
    }

    private function authorizeSuperadmin(Request $request): ?JsonResponse
    {
        $session = $request->attributes->get('dashboard.session');
        $userId = (string) ($session['identity']['id'] ?? '');
        if ($this->dashboardSuperadmin->isUser($userId)) return null;

        Log::warning('Non-superadmin attempted to access dashboard system tools.', ['discord_user_id' => $userId]);
        return response()->json(['message' => 'Forbidden.'], 403);
    }

    private function botAppPath(): ?string
    {
        $path = realpath((string) config('services.bot_app_path', ''));
        return $path && is_dir($path) ? $path : null;
    }

    /** @return array<string, mixed> */
    private function processStatus(string $appPath, string $process): array
    {
        $file = $appPath.DIRECTORY_SEPARATOR.'pids'.DIRECTORY_SEPARATOR.$process.'.json';
        if (! is_file($file) || ! is_readable($file)) {
            return ['name' => $process, 'state' => 'offline', 'pid' => null];
        }

        try {
            $info = json_decode((string) file_get_contents($file), true, 512, JSON_THROW_ON_ERROR);
            if (! is_array($info)) throw new \UnexpectedValueException('PID metadata must be an object.');
        } catch (Throwable $error) {
            Log::warning('Bot process metadata is invalid.', ['process' => $process, 'message' => $error->getMessage()]);
            return ['name' => $process, 'state' => 'unknown', 'pid' => null];
        }

        $pid = filter_var($info['pid'] ?? null, FILTER_VALIDATE_INT);
        $processExists = $pid !== false && $pid !== null && $pid > 0 && $this->isProcessRunning($pid);
        $heartbeatAt = isset($info['lastHeartbeatAt']) ? strtotime((string) $info['lastHeartbeatAt']) : false;
        $heartbeatIsFresh = $heartbeatAt !== false && $heartbeatAt >= time() - 45;
        $running = $processExists || $heartbeatIsFresh;
        $startTime = isset($info['startAppTime']) ? strtotime((string) $info['startAppTime']) : false;

        return [
            'name' => $process,
            'state' => $running ? 'online' : 'offline',
            'pid' => $pid !== false ? $pid : null,
            'last_heartbeat_at' => $heartbeatAt !== false ? date(DATE_ATOM, $heartbeatAt) : null,
            'uptime_seconds' => $running && $startTime !== false ? max(0, time() - $startTime) : null,
            'platform' => $info['platform'] ?? null,
            'node_version' => $info['nodeVersion'] ?? null,
            'discord_js_version' => $info['discordjsVersion'] ?? null,
            'app_version' => $info['appVersion'] ?? null,
            'heartbeat_interval' => $info['heartbeatInterval'] ?? null,
        ];
    }

    private function isProcessRunning(int $pid): bool
    {
        if (is_dir('/proc')) return is_dir('/proc/'.$pid);
        return function_exists('posix_kill') && @posix_kill($pid, 0);
    }

    /** @return list<string> */
    private function tailLines(string $path, int $limit): array
    {
        if ($limit <= 0) return [];

        $file = fopen($path, 'rb');
        if ($file === false) {
            throw new \RuntimeException('Could not open the bot log file.');
        }

        try {
            if (fseek($file, 0, SEEK_END) !== 0) {
                throw new \RuntimeException('Could not seek to the end of the bot log file.');
            }
            $position = ftell($file);
            if ($position === false) return [];

            $buffer = '';
            $newlineCount = 0;
            while ($position > 0 && $newlineCount <= $limit) {
                $chunkSize = min(8192, $position);
                $position -= $chunkSize;
                if (fseek($file, $position) !== 0) {
                    throw new \RuntimeException('Could not read the bot log file.');
                }

                $chunk = fread($file, $chunkSize);
                if ($chunk === false) {
                    throw new \RuntimeException('Could not read the bot log file.');
                }
                $newlineCount += substr_count($chunk, "\n");
                $buffer = $chunk.$buffer;
            }
        } finally {
            fclose($file);
        }

        $lines = explode("\n", $buffer);
        if (end($lines) === '') array_pop($lines);

        return array_values(array_filter(
            array_map(static fn (string $line): string => rtrim($line, "\r"), array_slice($lines, -$limit)),
            static fn (string $line): bool => $line !== ''
        ));
    }
}
