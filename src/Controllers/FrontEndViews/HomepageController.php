<?php


namespace App\Controllers\FrontEndViews;

use Slim\Views\PhpRenderer;
use App\Models\ToDoModel;

class HomepageController
{
    private $model;
    private $renderer;

    public function __construct(ToDoModel $model, PhpRenderer $renderer)
    {
        $this->model = $model;
        $this->renderer = $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        $toDoList = $this->model->getList();
        $data = ['ToDoList' => $toDoList];
        return $this->renderer->render($response, "index.php", $data);
    }
}