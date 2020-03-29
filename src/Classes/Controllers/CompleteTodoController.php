<?php
namespace TodoApp\Controllers;

use TodoApp\Models\TodoModel;
use Slim\Http\Request;
use Slim\Http\Response;

class CompleteTodoController
{
    private $TodoModel;

    public function __construct(TodoModel $TodoModel)
    {
        $this->TodoModel = $TodoModel;
    }

    public function __invoke(Request $request, Response $response)
    {
        //get the post data out of the http body, this comes back as an assoc array with the keys as the field names in DB
        $postData = $request->getParsedBody();
        //grab all data from array with a keys of id (todos)
        $id = $postData['id'];
        //run the completed method on them to only show todos with completed = 1
        $this->TodoModel->completeTodo($id);
        return $response->withRedirect('/todos');
    }
}