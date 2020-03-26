<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        'db' => [
            'host' => 'mysql:host=127.0.0.1;',
            'dbName' => 'dbname=todoApp',
            'userName' => 'root',
            'password' => 'password'
        ]
    ],
];
