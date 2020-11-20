<?php


namespace App\Factories;

use Psr\Container\ContainerInterface;
use App\Models\ToDoModel;


class ToDoModelFactory
{
    public function __invoke(ContainerInterface $container): ToDoModel
    {
        $db = $container->get('PDO');
        return new ToDoModel($db);
    }
}