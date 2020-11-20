<?php


namespace App\Controllers\ButtonControllers;


use App\Models\ToDoModel;


class AddItemController
{
    private $model;

    public function __construct(ToDoModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $parsedBody = $request->getParsedBody();
        $this->model->addItem($parsedBody['addItem'], $parsedBody['dueDate'], $parsedBody['category']);
        return $response->withHeader('Location', '/');
    }
}