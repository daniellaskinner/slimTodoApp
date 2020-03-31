<?php
namespace TodoApp\Controllers;

use Slim\Views\PhpRenderer;
use TodoApp\Models\TodoModel;
use Slim\Http\Request;
use Slim\Http\Response;

class SeeAllTodosController
{
    private $renderer;
    private $TodoModel;

    public function __construct(PHPRenderer $renderer, TodoModel $TodoModel)
    {
        $this->renderer = $renderer;
        $this->TodoModel = $TodoModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $args['todos'] = $this->TodoModel->getAllTodos();
        $args['completedTodos'] = $this->TodoModel->getCompletedTodos();
        return $this->renderer->render($response, 'todos.phtml', $args);
    }
}
