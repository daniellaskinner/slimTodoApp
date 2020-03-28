<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\DeleteTodoController;
use Psr\Container\ContainerInterface;

class DeleteTodoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $TodoModel = $container->get('TodoModel');
        return new DeleteTodoController($TodoModel);
    }
}