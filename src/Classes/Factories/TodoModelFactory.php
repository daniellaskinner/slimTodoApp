<?php

namespace TodoApp\Factories;

use TodoApp\Models\TodoModel;
use Psr\Container\ContainerInterface;

class TodoModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbConnection = $container->get('dbConnection');
        return new TodoModel($dbConnection);
    }
}