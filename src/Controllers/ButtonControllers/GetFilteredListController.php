<?php


namespace App\Controllers\ButtonControllers;


use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class GetFilteredListController
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

        $parsedBody = $request->getParsedBody();
        $filteredList = $this->model->getFilteredList($parsedBody['filter']);
        $data = ['ToDoList' => $filteredList];
        return $this->renderer->render($response, "index.php", $data);

    }
}