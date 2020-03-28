<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    $container['dbConnection'] = function ($c) {
        $settings = $c->get('settings')['db'];
        $db = new \PDO($settings['host'] . $settings['dbName'], $settings['userName'], $settings['password']);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    };

    $container['TodoModel'] = new TodoApp\Factories\TodoModelFactory();
    $container['SeeAllTodosController'] = new TodoApp\Factories\SeeAllTodosControllerFactory();
    $container['AddTodoController'] = new TodoApp\Factories\AddTodoControllerFactory();
    $container['DeleteTodoController'] = new TodoApp\Factories\DeleteTodoControllerFactory();

};
