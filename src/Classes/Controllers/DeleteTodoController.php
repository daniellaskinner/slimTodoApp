<?php
namespace TodoApp\Controllers;

use TodoApp\Models\TodoModel;
use Slim\Http\Request;
use Slim\Http\Response;

class DeleteTodoController
{
    private $TodoModel;

    public function __construct(TodoModel $TodoModel)
    {
        $this->TodoModel = $TodoModel;
    }

    public function __invoke(Request $request, Response $response)
    {
        $postData = $request->getParsedBody();
        $id = $postData['id'];
        $this->TodoModel->deleteTodo($id);
        return $response->withRedirect('/todos');
    }
}