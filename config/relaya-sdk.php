<?php

return [
    'host' => env('RELAYA_API_BASE_URL', 'https://api.relaya.ru/v1'),
    'access_token' => env('RELAYA_API_TOKEN'),
    'user_agent' => env('RELAYA_PHP_SDK_USER_AGENT', 'relaya-sdk-php/1.0'),
    'debug' => (bool) env('RELAYA_PHP_SDK_DEBUG', false),
    'debug_file' => env('RELAYA_PHP_SDK_DEBUG_FILE', storage_path('logs/relaya-sdk.log')),
    'temp_folder_path' => env('RELAYA_PHP_SDK_TEMP_DIR', sys_get_temp_dir()),
    'api_keys' => [
        // 'ApiKeyAuth' => env('RELAYA_API_KEY'),
    ],
    'api_key_prefixes' => [
        // 'ApiKeyAuth' => 'Bearer',
    ],
    'http' => [
        'timeout' => (float) env('RELAYA_PHP_SDK_HTTP_TIMEOUT', 30),
        'connect_timeout' => (float) env('RELAYA_PHP_SDK_HTTP_CONNECT_TIMEOUT', 10),
        'verify' => env('RELAYA_PHP_SDK_HTTP_VERIFY', true),
        'proxy' => env('RELAYA_PHP_SDK_HTTP_PROXY'),
    ],
];
