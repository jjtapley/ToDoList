<?php


namespace App\Factories;


use App\Controllers\ButtonControllers\DeleteItemController;
use Psr\Container\ContainerInterface;

class DeleteItemControllerFactory
{
    public function __invoke(ContainerInterface $container): DeleteItemController
    {
        $model = $container->get('ToDoModel');
        return new DeleteItemController($model);
    }
}