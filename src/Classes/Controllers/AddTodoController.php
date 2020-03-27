<?php
namespace TodoApp\Controllers;

use TodoApp\Models\TodoModel;
use Slim\Http\Request;
use Slim\Http\Response;

class AddTodoController
{
    private $TodoModel;

    public function __construct(TodoModel $TodoModel)
    {
        $this->TodoModel = $TodoModel;
    }

    public function __invoke(Request $request, Response $response)
    {
        $formInput = $request->getParsedBody();
        //the http body gets stored as an assoc array
        $newTodo = $formInput['newTodo'];
        $this->TodoModel->createTodo($newTodo);
        return $response->withRedirect('/todos');
        //makes a GET request to /todos (reloading the page)
    }
}