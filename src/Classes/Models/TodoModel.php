<?php

namespace TodoApp\Models;

class TodoModel
{
    private $dbConnection;

    public function __construct($dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function validateTodos($input)
    {
        $trimmedTodo = trim($input);
        $replaceSpaceWithComma = str_replace(' ', ',', $trimmedTodo);
        $array = explode(",", $replaceSpaceWithComma);
        $string = implode (  " " , $array );
        $sanitised = preg_replace("/[^a-zA-Z0-9]/", " ", $string);
        return filter_var($sanitised, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public function getAllTodos()
    {
        $query = $this->dbConnection->prepare('SELECT `id`, `todo` FROM `todoList` WHERE `deleted`=0');
        $query->execute();
        return $query->fetchAll();
    }

    public function createTodo($newTodo)
    {
        $query = $this->dbConnection->prepare('INSERT INTO `todoList` (`todo`) VALUES (:todo) ');
        $query->bindParam(':todo', $newTodo);
        return $query->execute();
    }

    public function deleteTodo($id)
    {
        $query = $this->dbConnection->prepare('UPDATE `todoList` SET `deleted`= 1 WHERE `id` = :id');
        $query->bindParam(':id', $id);
        return $query->execute();
    }
}

