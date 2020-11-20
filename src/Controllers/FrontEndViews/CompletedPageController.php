<?php


namespace App\Controllers\FrontEndViews;


use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class CompletedPageController
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
        $completedItems = $this->model->getCompleted();
        $data = ['CompletedItems' => $completedItems];
        return $this->renderer->render($response, "CompletedPage.php", $data);
    }
}