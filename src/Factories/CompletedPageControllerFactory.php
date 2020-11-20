<?php


namespace App\Factories;


use App\Controllers\FrontEndViews\CompletedPageController;
use Psr\Container\ContainerInterface;

class CompletedPageControllerFactory
{
    public function __invoke(ContainerInterface $container): CompletedPageController
    {
        $model = $container->get('ToDoModel');
        $renderer = $container->get('renderer');
        return new CompletedPageController($model, $renderer);
    }
}