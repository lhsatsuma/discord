<?php

namespace App\Http\Controllers;

use App\Models\TriviaAlternative;
use App\Models\TriviaCategory;
use App\Models\TriviaQuestion;
use App\Services\DashboardGuilds;
use App\Services\DashboardSuperadmin;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Throwable;

class TriviaContentController extends Controller
{
    private const DIFFICULTIES = ['easy' => 1, 'medium' => 2, 'hard' => 3];

    public function library(Request $request, DashboardSuperadmin $dashboardSuperadmin): JsonResponse
    {
        $filters = $request->validate([
            'locale' => ['nullable', 'in:en-US,pt-BR'],
            'category' => ['nullable', 'uuid'],
            'difficulty' => ['nullable', 'integer', 'between:1,3'],
            'page' => ['nullable', 'integer', 'min:1'],
        ]);

        $session = $request->attributes->get('dashboard.session');

        try {
            $includePending = $dashboardSuperadmin->isUser((string) $session['identity']['id']);
            $locale = isset($filters['locale']) ? (string) $filters['locale'] : null;
            $questions = TriviaQuestion::dashboardLibrary(
                $includePending,
                $locale,
                isset($filters['category']) ? (string) $filters['category'] : null,
                isset($filters['difficulty']) ? (int) $filters['difficulty'] : null,
                isset($filters['page']) ? (int) $filters['page'] : 1
            );

            return response()->json([
                'categories' => TriviaCategory::dashboardLibrary($includePending, $locale)
                    ->map(static fn (TriviaCategory $category): array => [
                        'id' => (string) $category->id,
                        'locale' => (string) $category->locale,
                        'short_description' => (string) $category->short_description,
                        'description' => (string) $category->description,
                        'approved' => (bool) $category->approved,
                    ])->all(),
                'questions' => $questions->through(static fn (TriviaQuestion $question): array => [
                    'id' => (string) $question->id,
                    'question' => (string) $question->question,
                    'difficulty' => (int) $question->difficulty,
                    'explanation' => $question->explanation,
                    'approved' => (bool) $question->approved,
                    'category' => [
                        'id' => (string) $question->triviaCategory->id,
                        'locale' => (string) $question->triviaCategory->locale,
                        'description' => (string) $question->triviaCategory->description,
                        'approved' => (bool) $question->triviaCategory->approved,
                    ],
                    'alternatives' => $question->alternatives->map(static fn (TriviaAlternative $alternative): array => [
                        'id' => (string) $alternative->id,
                        'description' => (string) $alternative->description,
                        'correct_answer' => (bool) $alternative->correct_answer,
                    ])->all(),
                ])->toArray(),
            ]);
        } catch (Throwable $error) {
            Log::error('Could not load the trivia dashboard library.', [
                'discord_user_id' => (string) ($session['identity']['id'] ?? ''),
                'message' => $error->getMessage(),
            ]);

            return response()->json(['message' => 'Could not load trivia content.'], 500);
        }
    }

    public function categories(Request $request, string $serverId, DashboardGuilds $dashboardGuilds): JsonResponse
    {
        if ($response = $this->authorizeServer($request, $serverId, $dashboardGuilds)) {
            return $response;
        }

        try {
            $userId = (string) $request->attributes->get('dashboard.session')['identity']['id'];

            return response()->json([
                'categories' => TriviaCategory::query()
                    ->where(static function ($query) use ($userId): void {
                        $query->where('approved', true)
                            ->orWhere(static fn ($pending) => $pending->where('approved', false)->where('created_by', $userId));
                    })
                    ->orderBy('locale')
                    ->orderBy('description')
                    ->get(['id', 'locale', 'short_description', 'description', 'approved']),
            ]);
        } catch (Throwable $error) {
            Log::error('Could not load trivia categories for dashboard submissions.', [
                'server_id' => $serverId,
                'message' => $error->getMessage(),
            ]);

            return response()->json(['message' => 'Could not load trivia categories.'], 500);
        }
    }

    public function submissionCategories(Request $request, DashboardSuperadmin $dashboardSuperadmin): JsonResponse
    {
        try {
            $userId = (string) $request->attributes->get('dashboard.session')['identity']['id'];
            $includePending = $dashboardSuperadmin->isUser($userId);

            return response()->json([
                'categories' => TriviaCategory::query()
                    ->where(static function ($query) use ($userId, $includePending): void {
                        $query->where('approved', true)
                            ->orWhere(static function ($pending) use ($userId, $includePending): void {
                                $pending->where('approved', false);
                                if (! $includePending) {
                                    $pending->where('created_by', $userId);
                                }
                            });
                    })
                    ->orderBy('locale')
                    ->orderBy('description')
                    ->get(['id', 'locale', 'short_description', 'description', 'approved']),
            ]);
        } catch (Throwable $error) {
            Log::error('Could not load global trivia categories for submissions.', [
                'message' => $error->getMessage(),
            ]);

            return response()->json(['message' => 'Could not load trivia categories.'], 500);
        }
    }

    public function storeLibraryCategory(Request $request): JsonResponse
    {
        try {
            $data = $request->validate([
                'locale' => ['required', 'in:en-US,pt-BR'],
                'short_description' => ['required', 'string', 'max:30'],
                'description' => ['required', 'string', 'max:80'],
            ]);
            $shortDescription = trim($data['short_description']);
            $description = trim($data['description']);
            $duplicate = TriviaCategory::query()
                ->where('locale', $data['locale'])
                ->where(static function ($query) use ($shortDescription, $description): void {
                    $query->whereRaw('LOWER(short_description) = ?', [mb_strtolower($shortDescription)])
                        ->orWhereRaw('LOWER(description) = ?', [mb_strtolower($description)]);
                })
                ->exists();
            if ($duplicate) {
                throw ValidationException::withMessages(['description' => 'A category with this name or short name already exists for that language.']);
            }

            $userId = (string) $request->attributes->get('dashboard.session')['identity']['id'];
            $category = TriviaCategory::query()->create([
                'id' => (string) Str::uuid(),
                'created_by' => $userId,
                'approved' => false,
                'locale' => $data['locale'],
                'short_description' => $shortDescription,
                'description' => $description,
            ]);

            Log::info('Global trivia category submitted for superadmin approval.', [
                'category_id' => $category->id,
                'locale' => $category->locale,
                'discord_user_id' => $userId,
            ]);

            return response()->json([
                'ok' => true,
                'pending_approval' => true,
                'category' => [
                    'id' => (string) $category->id,
                    'locale' => (string) $category->locale,
                    'description' => (string) $category->description,
                ],
            ], 201);
        } catch (ValidationException $error) {
            throw $error;
        } catch (Throwable $error) {
            Log::error('Could not submit global trivia category.', [
                'message' => $error->getMessage(),
            ]);

            return response()->json(['message' => 'Could not submit trivia category.'], 500);
        }
    }

    public function storeLibraryQuestion(Request $request, DashboardSuperadmin $dashboardSuperadmin): JsonResponse
    {
        $question = $request->validate($this->questionRules());
        $userId = (string) $request->attributes->get('dashboard.session')['identity']['id'];

        return $this->submitQuestionBatch($request, null, [$question], $dashboardSuperadmin->isUser($userId));
    }

    public function importLibraryQuestions(Request $request, DashboardSuperadmin $dashboardSuperadmin): JsonResponse
    {
        $data = $request->validate([
            'questions' => ['required', 'array', 'min:1', 'max:200'],
            'questions.*.category' => ['required', 'uuid'],
            'questions.*.difficulty' => ['required', 'in:easy,medium,hard'],
            'questions.*.question' => ['required', 'string', 'max:4096'],
            'questions.*.correct' => ['required', 'string', 'max:255'],
            'questions.*.incorrects' => ['required', 'array', 'size:3'],
            'questions.*.incorrects.*' => ['required', 'string', 'max:255'],
            'questions.*.explanation' => ['nullable', 'string', 'max:1024'],
        ]);

        $userId = (string) $request->attributes->get('dashboard.session')['identity']['id'];

        return $this->submitQuestionBatch($request, null, $data['questions'], $dashboardSuperadmin->isUser($userId));
    }

    public function storeCategory(Request $request, string $serverId, DashboardGuilds $dashboardGuilds): JsonResponse
    {
        if ($response = $this->authorizeServer($request, $serverId, $dashboardGuilds)) {
            return $response;
        }

        try {
            $data = $request->validate([
                'locale' => ['required', 'in:en-US,pt-BR'],
                'short_description' => ['required', 'string', 'max:30'],
                'description' => ['required', 'string', 'max:80'],
            ]);
            $shortDescription = trim($data['short_description']);
            $description = trim($data['description']);
            $duplicate = TriviaCategory::query()
                ->where('locale', $data['locale'])
                ->where(static function ($query) use ($shortDescription, $description): void {
                    $query->whereRaw('LOWER(short_description) = ?', [mb_strtolower($shortDescription)])
                        ->orWhereRaw('LOWER(description) = ?', [mb_strtolower($description)]);
                })
                ->exists();
            if ($duplicate) {
                throw ValidationException::withMessages(['description' => 'A category with this name or short name already exists for that language.']);
            }
            $userId = (string) $request->attributes->get('dashboard.session')['identity']['id'];
            $category = TriviaCategory::query()->create([
                'id' => (string) Str::uuid(),
                'created_by' => $userId,
                'approved' => false,
                'locale' => $data['locale'],
                'short_description' => $shortDescription,
                'description' => $description,
            ]);

            Log::info('Trivia category submitted for superadmin approval.', [
                'category_id' => $category->id,
                'locale' => $category->locale,
                'discord_user_id' => $userId,
                'server_id' => $serverId,
            ]);

            return response()->json([
                'ok' => true,
                'pending_approval' => true,
                'category' => [
                    'id' => (string) $category->id,
                    'locale' => (string) $category->locale,
                    'description' => (string) $category->description,
                ],
            ], 201);
        } catch (ValidationException $error) {
            throw $error;
        } catch (Throwable $error) {
            Log::error('Could not submit trivia category.', ['server_id' => $serverId, 'message' => $error->getMessage()]);

            return response()->json(['message' => 'Could not submit trivia category.'], 500);
        }
    }

    public function storeQuestion(Request $request, string $serverId, DashboardGuilds $dashboardGuilds): JsonResponse
    {
        if ($response = $this->authorizeServer($request, $serverId, $dashboardGuilds)) {
            return $response;
        }

        $question = $request->validate($this->questionRules());

        return $this->submitQuestionBatch($request, $serverId, [$question], false);
    }

    public function importQuestions(Request $request, string $serverId, DashboardGuilds $dashboardGuilds): JsonResponse
    {
        if ($response = $this->authorizeServer($request, $serverId, $dashboardGuilds)) {
            return $response;
        }

        $data = $request->validate([
            'questions' => ['required', 'array', 'min:1', 'max:200'],
            'questions.*.category' => ['required', 'uuid'],
            'questions.*.difficulty' => ['required', 'in:easy,medium,hard'],
            'questions.*.question' => ['required', 'string', 'max:4096'],
            'questions.*.correct' => ['required', 'string', 'max:255'],
            'questions.*.incorrects' => ['required', 'array', 'size:3'],
            'questions.*.incorrects.*' => ['required', 'string', 'max:255'],
            'questions.*.explanation' => ['nullable', 'string', 'max:1024'],
        ]);

        return $this->submitQuestionBatch($request, $serverId, $data['questions'], false);
    }

    /** @return array<string, list<string>> */
    private function questionRules(): array
    {
        return [
            'category' => ['required', 'uuid'],
            'difficulty' => ['required', 'in:easy,medium,hard'],
            'question' => ['required', 'string', 'max:4096'],
            'correct' => ['required', 'string', 'max:255'],
            'incorrects' => ['required', 'array', 'size:3'],
            'incorrects.*' => ['required', 'string', 'max:255'],
            'explanation' => ['nullable', 'string', 'max:1024'],
        ];
    }

    /** @param list<array<string, mixed>> $questions */
    private function submitQuestionBatch(Request $request, ?string $serverId, array $questions, bool $includeAllPendingCategories): JsonResponse
    {
        try {
            $userId = (string) $request->attributes->get('dashboard.session')['identity']['id'];
            $categoryIds = array_values(array_unique(array_map(static fn (array $question): string => (string) $question['category'], $questions)));
            $availableCategoryIds = TriviaCategory::query()
                ->whereIn('id', $categoryIds)
                ->where(static function ($query) use ($userId, $includeAllPendingCategories): void {
                    $query->where('approved', true)
                        ->orWhere(static function ($pending) use ($userId, $includeAllPendingCategories): void {
                            $pending->where('approved', false);
                            if (! $includeAllPendingCategories) {
                                $pending->where('created_by', $userId);
                            }
                        });
                })
                ->pluck('id')
                ->map(static fn ($id): string => (string) $id)
                ->all();

            if (array_diff($categoryIds, $availableCategoryIds) !== []) {
                throw ValidationException::withMessages(['category' => 'Choose an approved category or one of your pending category submissions.']);
            }

            foreach ($questions as $index => $question) {
                $options = array_map(static fn (string $option): string => mb_strtolower(trim($option)), [
                    (string) $question['correct'],
                    ...$question['incorrects'],
                ]);
                if (count(array_unique($options)) !== count($options)) {
                    throw ValidationException::withMessages([
                        (count($questions) === 1 ? 'incorrects' : "questions.$index.incorrects") => 'The correct answer and incorrect alternatives must be different.',
                    ]);
                }
            }

            DB::transaction(function () use ($questions, $userId): void {
                foreach ($questions as $questionData) {
                    $questionId = (string) Str::uuid();
                    TriviaQuestion::query()->create([
                        'id' => $questionId,
                        'created_by' => $userId,
                        'approved' => false,
                        'category' => (string) $questionData['category'],
                        'question' => trim((string) $questionData['question']),
                        'difficulty' => self::DIFFICULTIES[(string) $questionData['difficulty']],
                        'explanation' => trim((string) ($questionData['explanation'] ?? '')) ?: null,
                    ]);

                    $alternatives = [[trim((string) $questionData['correct']), true]];
                    foreach ($questionData['incorrects'] as $incorrect) {
                        $alternatives[] = [trim((string) $incorrect), false];
                    }
                    foreach ($alternatives as [$description, $isCorrect]) {
                        TriviaAlternative::query()->create([
                            'id' => (string) Str::uuid(),
                            'created_by' => $userId,
                            'question' => $questionId,
                            'description' => $description,
                            'correct_answer' => $isCorrect,
                        ]);
                    }
                }
            });

            Log::info('Trivia questions submitted for superadmin approval.', [
                'question_count' => count($questions),
                'discord_user_id' => $userId,
                'server_id' => $serverId,
            ]);

            return response()->json(['ok' => true, 'pending_approval' => true, 'submitted' => count($questions)], 201);
        } catch (ValidationException $error) {
            throw $error;
        } catch (Throwable $error) {
            Log::error('Could not submit trivia questions.', ['server_id' => $serverId, 'message' => $error->getMessage()]);

            return response()->json(['message' => 'Could not submit trivia questions.'], 500);
        }
    }

    private function authorizeServer(Request $request, string $serverId, DashboardGuilds $dashboardGuilds): ?JsonResponse
    {
        try {
            $session = $request->attributes->get('dashboard.session');
            $guilds = $dashboardGuilds->configuredForUser(
                (string) $session['identity']['id'],
                (string) $session['access_token']
            );
            if (collect($guilds)->contains('id', $serverId)) {
                return null;
            }

            return response()->json(['message' => 'You no longer have permission to manage this server.'], 403);
        } catch (Throwable $error) {
            Log::warning('Could not verify server access for trivia submission.', [
                'server_id' => $serverId,
                'message' => $error->getMessage(),
            ]);

            return response()->json(['message' => 'Could not verify your server permissions. Please try again.'], 503);
        }
    }
}
