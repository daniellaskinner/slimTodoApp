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
}