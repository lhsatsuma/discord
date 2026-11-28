<?php

namespace App\Http\Controllers;

use App\Lib\DiscordApi;
use App\Models\User;
use App\Services\DashboardGuilds;
use App\Services\DashboardJwt;
use App\Services\DashboardSuperadmin;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Throwable;

class DashboardAuthController extends Controller
{
    public function publicConfig(): JsonResponse
    {
        return response()->json([
            'links' => [
                'bot_invite' => $this->httpsUrl(config('services.discord.bot_invite_url')),
                'support_invite' => $this->httpsUrl(config('services.discord.support_invite_url')),
            ],
        ]);
    }

    public function redirect(DiscordApi $discordApi)
    {
        $clientId = (string) config('services.discord.client_id');
        $redirectUri = (string) config('services.discord.redirect');
        if ($clientId === '' || $redirectUri === '') {
            Log::error('Discord OAuth is missing client ID or callback URL.');

            return Redirect::to($this->frontendUrl().'/login?error=oauth_unavailable');
        }

        $state = Str::random(48);
        Cache::put('dashboard:oauth-state:'.$state, true, now()->addMinutes(5));

        return Redirect::away($discordApi->authorizationUrl($state));
    }

    public function exchangeCode(Request $request, DashboardJwt $jwt, DiscordApi $discordApi, DashboardGuilds $dashboardGuilds, DashboardSuperadmin $dashboardSuperadmin): JsonResponse
    {
        try {
            $data = $request->validate(['code' => ['required', 'string'], 'state' => ['required', 'string']]);
            [$identity, $token] = $this->exchange($data['code'], $data['state'], $jwt, $discordApi, $dashboardGuilds, $dashboardSuperadmin);

            return response()->json(['token' => $token, 'user' => $identity]);
        } catch (ValidationException $error) {
            throw $error;
        } catch (Throwable $error) {
            Log::warning('Discord OAuth code exchange failed.', ['message' => $error->getMessage()]);

            return response()->json(['message' => 'Discord login could not be completed. Please try again.'], 401);
        }
    }

    public function callbackFailure(Request $request): JsonResponse
    {
        $data = $request->validate([
            'error' => ['required', 'string', 'max:100'],
            'error_description' => ['nullable', 'string', 'max:500'],
            'has_code' => ['required', 'boolean'],
            'has_state' => ['required', 'boolean'],
            'path' => ['nullable', 'string', 'max:200'],
            'query_keys' => ['nullable', 'array', 'max:20'],
            'query_keys.*' => ['string', 'max:40'],
            'fragment_keys' => ['nullable', 'array', 'max:20'],
            'fragment_keys.*' => ['string', 'max:40'],
        ]);

        Log::warning('Discord returned an incomplete or failed OAuth callback.', [
            'error' => $data['error'],
            'error_description' => $data['error_description'] ?? null,
            'has_code' => $data['has_code'],
            'has_state' => $data['has_state'],
            'path' => $data['path'] ?? null,
            'query_keys' => $data['query_keys'] ?? [],
            'fragment_keys' => $data['fragment_keys'] ?? [],
        ]);

        return response()->json(['ok' => true]);
    }

    public function me(Request $request, DashboardSuperadmin $dashboardSuperadmin): JsonResponse
    {
        $session = $request->attributes->get('dashboard.session');
        $identity = $session['identity'];
        $identity['is_superadmin'] = $dashboardSuperadmin->isUser((string) $identity['id']);

        return response()->json(['user' => $identity]);
    }

    public function logout(Request $request, DashboardJwt $jwt): JsonResponse
    {
        $jwt->revoke((string) $request->attributes->get('dashboard.token'));

        return response()->json(['ok' => true]);
    }

    private function exchange(string $code, string $state, DashboardJwt $jwt, DiscordApi $discordApi, DashboardGuilds $dashboardGuilds, DashboardSuperadmin $dashboardSuperadmin): array
    {
        if ($state === '' || ! Cache::pull('dashboard:oauth-state:'.$state)) {
            throw new \UnexpectedValueException('Discord OAuth state was invalid or expired.');
        }
        $tokenResponse = $discordApi->exchangeAuthorizationCode($code);
        $user = $discordApi->currentUser($tokenResponse['access_token']);
        if (! is_array($user) || ! isset($user['id'])) {
            throw new \UnexpectedValueException('Discord returned an incomplete user profile.');
        }

        $identity = [
            'id' => (string) $user['id'],
            'username' => (string) ($user['global_name'] ?? $user['username'] ?? 'Discord user'),
            'avatar' => isset($user['avatar']) ? (string) $user['avatar'] : null,
            'is_superadmin' => $dashboardSuperadmin->isUser((string) $user['id']),
        ];
        $guilds = $dashboardGuilds->configuredForUser($identity['id'], $tokenResponse['access_token']);

        User::updateDiscordProfile(
            $identity['id'],
            $identity['username'],
            (string) ($user['username'] ?? $identity['username']),
            isset($user['global_name']) ? (string) $user['global_name'] : null,
            $identity['avatar']
        );

        return [$identity, $jwt->issue($identity, $tokenResponse, $guilds)];
    }

    private function frontendUrl(): string
    {
        return rtrim((string) config('services.discord.frontend'), '/');
    }

    private function httpsUrl(mixed $value): ?string
    {
        $url = trim((string) $value);
        $scheme = parse_url($url, PHP_URL_SCHEME);

        if ($url === '' || filter_var($url, FILTER_VALIDATE_URL) === false || strtolower((string) $scheme) !== 'https') {
            return null;
        }

        return $url;
    }
}
