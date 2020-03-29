<?php

namespace TodoApp\Factories;

use Psr\Container\ContainerInterface;
use TodoApp\Controllers\CompleteTodoController;

class CompleteTodoControllerFactory
 {
    public function __invoke(ContainerInterface $container)
    {
        $TodoModel = $container->get('TodoModel');
        return new CompleteTodoController($TodoModel);
    }
 }
