<?php


namespace App\Factories;


use App\Controllers\ButtonControllers\CompletedItemController;
use Psr\Container\ContainerInterface;

class CompletedItemControllerFactory
{
    public function __invoke(ContainerInterface $container): CompletedItemController
    {
        $model = $container->get('ToDoModel');
        return new CompletedItemController($model);
    }

}