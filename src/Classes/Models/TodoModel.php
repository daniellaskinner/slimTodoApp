<?php

namespace TodoApp\Models;

class TodoModel
{
    private $dbConnection;

    public function __construct($dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function getAllTodos()
    {
        $query = $this->dbConnection->prepare('SELECT `id`, `todo` FROM `todoList`');
        $query->execute();
        return $query->fetchAll();
    }

    public function createTodo($newTodo)
    {
        $query = $this->dbConnection->prepare('INSERT INTO `todoList` (`todo`) VALUES (:todo) ');
        $query->bindParam(':todo', $newTodo);
        return $query->execute();
    }
}

