<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\AddTodoController;
use Psr\Container\ContainerInterface;

class AddTodoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $TodoModel = $container->get('TodoModel');
        return new AddTodoController($TodoModel);
    }
}