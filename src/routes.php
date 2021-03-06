<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });

    $app->get('/todos', 'SeeAllTodosController');
    $app->post('/todos', 'AddTodoController');
    $app->delete('/todos', 'DeleteTodoController');
    $app->put('/todos/complete', 'CompleteTodoController');
//    $app->get('/todos/completed', 'DisplayCompletedTodosController');
};
