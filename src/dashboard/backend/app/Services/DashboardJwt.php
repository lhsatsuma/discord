<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class DashboardJwt
{
    private function secret(): string
    {
        $key = (string) config('app.key');
        return str_starts_with($key, 'base64:') ? (string) base64_decode(substr($key, 7)) : $key;
    }

    public function issue(array $identity, array $oauth, array $guilds = []): string
    {
        $jti = (string) Str::uuid();
        $now = time();
        $header = $this->encode(['alg' => 'HS256', 'typ' => 'JWT']);
        $payload = $this->encode([
            'sub' => (string) $identity['id'],
            'jti' => $jti,
            'iat' => $now,
            'exp' => $now + 3600,
        ]);
        $unsigned = $header.'.'.$payload;
        Cache::put('dashboard:oauth:'.$jti, [
            'identity' => $identity,
            'guilds' => $guilds,
            'access_token' => $oauth['access_token'],
            'refresh_token' => $oauth['refresh_token'] ?? null,
        ], now()->addHour());
        return $unsigned.'.'.rtrim(strtr(base64_encode(hash_hmac('sha256', $unsigned, $this->secret(), true)), '+/', '-_'), '=');
    }

    public function resolve(string $token): ?array
    {
        $parts = explode('.', $token);
        if (count($parts) !== 3) {
            return null;
        }

        [$header, $payload, $signature] = $parts;
        $expected = rtrim(strtr(base64_encode(hash_hmac('sha256', $header.'.'.$payload, $this->secret(), true)), '+/', '-_'), '=');
        if (! hash_equals($expected, $signature)) {
            return null;
        }

        $claims = json_decode($this->decode($payload), true);
        if (! is_array($claims) || ! isset($claims['sub'], $claims['jti'], $claims['exp']) || $claims['exp'] < time()) {
            return null;
        }

        $session = Cache::get('dashboard:oauth:'.$claims['jti']);
        return is_array($session) && ($session['identity']['id'] ?? null) === $claims['sub'] ? $session : null;
    }

    public function revoke(string $token): void
    {
        $parts = explode('.', $token);
        if (count($parts) !== 3) {
            return;
        }
        $claims = json_decode($this->decode($parts[1]), true);
        if (is_array($claims) && isset($claims['jti'])) {
            Cache::forget('dashboard:oauth:'.$claims['jti']);
        }
    }

    private function encode(array $value): string
    {
        return rtrim(strtr(base64_encode(json_encode($value, JSON_THROW_ON_ERROR)), '+/', '-_'), '=');
    }

    private function decode(string $value): string
    {
        return (string) base64_decode(strtr($value, '-_', '+/'));
    }
}
