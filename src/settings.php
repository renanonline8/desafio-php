<?php

ActiveRecord\Config::initialize(function ($cfg)
{
    $cfg->set_model_directory(__DIR__ . '/classes/model');
    $cfg->set_connections(array(
        'development' => 'mysql://root:@localhost/vendas'
    ));
});

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
