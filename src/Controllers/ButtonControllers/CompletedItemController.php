<?php


namespace App\Controllers\ButtonControllers;


use App\Models\ToDoModel;

class CompletedItemController
{
    private $model;

    public function __construct(ToDoModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $this->model->markCompleted($args['item']);
        return $response->withHeader('Location', '/');
    }
}