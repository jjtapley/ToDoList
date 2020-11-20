<?php


namespace App\Controllers\ButtonControllers;


use App\Models\ToDoModel;

class UnCompletedItemController
{
    private $model;

    public function __construct(ToDoModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $this->model->markUnCompleted($args['item']);
        return $response->withHeader('Location', '/CompletedPage');
    }
}