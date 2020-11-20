<?php


namespace App\Factories;


use App\Controllers\ButtonControllers\GetFilteredListController;
use Psr\Container\ContainerInterface;

class GetFilteredListControllerFactory
{
    public function __invoke(ContainerInterface $container): GetFilteredListController
    {
        $model = $container->get('ToDoModel');
        $renderer = $container->get('renderer');
        return new GetFilteredListController($model, $renderer);
    }
}