<?php


namespace App\Factories;


use App\Controllers\FrontEndViews\HomepageController;
use Psr\Container\ContainerInterface;

class HomepageControllerFactory
{
    public function __invoke(ContainerInterface $container): HomepageController
    {
        $model = $container->get('ToDoModel');
        $renderer = $container->get('renderer');
        return new HomepageController($model, $renderer);
    }
}