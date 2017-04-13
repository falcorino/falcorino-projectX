<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../public/view',
        ],

        'admin_renderer' => [
            'template_path' => __DIR__ . '/../public/view_admin',
        ],

        'db' => [
            'host'   => "localhost",
            'user'   => "user",
            'pass'   => "password",
            'dbname' => "exampleapp",
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
