<?php
namespace TodoApp\Controllers;

use TodoApp\Models\TodoModel;
use Slim\Http\Request;
use Slim\Http\Response;

class DisplayCompletedTodosController
{
    private $TodoModel;

    public function __construct(TodoModel $TodoModel)
    {
        $this->TodoModel = $TodoModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $args['completedTodos'] = $this->TodoModel->getCompletedTodos();
        $response = $args['completedTodos'];
        return $response->withRedirect('/todos');
    }
}
