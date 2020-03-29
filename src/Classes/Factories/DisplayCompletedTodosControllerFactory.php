<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\DisplayCompletedTodosController;
use Psr\Container\ContainerInterface;

class DisplayCompletedTodosControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $TodoModel = $container->get('TodoModel');
        return new DisplayCompletedTodosController($TodoModel);
    }
}