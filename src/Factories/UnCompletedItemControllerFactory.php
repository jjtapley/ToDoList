<?php


namespace App\Factories;


use App\Controllers\ButtonControllers\UnCompletedItemController;
use Psr\Container\ContainerInterface;

class UnCompletedItemControllerFactory
{
    public function __invoke(ContainerInterface $container): UnCompletedItemController
    {
        $model = $container->get('ToDoModel');
        return new UnCompletedItemController($model);
    }
}