<?php


namespace App\Factories;


use App\Controllers\ButtonControllers\AddItemController;
use Psr\Container\ContainerInterface;

class AddItemControllerFactory
{
    public function __invoke(ContainerInterface $container): AddItemController
    {
        $model = $container->get('ToDoModel');
        return new AddItemController($model);
    }
}