<?php

function config(string $key, mixed $default = null): mixed
{
    static $config = null;

    if ($config === null) {
        $config = require dirname(__DIR__) . '/config/app.php';
    }

    return $config[$key] ?? $default;
}

function asset(string $path): string
{
    $baseUrl = rtrim((string) config('base_url', ''), '/');
    $cleanPath = ltrim($path, '/');

    return $baseUrl . '/assets/' . $cleanPath;
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function current_page(): string
{
    $page = $_GET['page'] ?? 'home';
    $page = is_string($page) ? $page : 'home';
    $page = strtolower(trim($page));

    return preg_match('/^[a-z0-9_-]+$/', $page) ? $page : 'home';
}

function page_path(string $page): string
{
    return dirname(__DIR__) . '/pages/' . $page . '.php';
}

function render_page(string $page): void
{
    $path = page_path($page);

    if (!is_file($path)) {
        http_response_code(404);
        $path = page_path('404');
    }

    require $path;
}

