<?php


namespace App\Controllers\ButtonControllers;


use App\Models\ToDoModel;

class DeleteItemController
{
    private $model;

    public function __construct(ToDoModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $this->model->deleteItem($args['item']);
        return $response->withHeader('Location', '/');
    }
}