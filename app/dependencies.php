<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Slim\Views\PhpRenderer;

return function (ContainerBuilder $containerBuilder) {
    $container = [];

    $container[LoggerInterface::class] = function (ContainerInterface $c) {
        $settings = $c->get('settings');

        $loggerSettings = $settings['logger'];
        $logger = new Logger($loggerSettings['name']);

        $processor = new UidProcessor();
        $logger->pushProcessor($processor);

        $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
        $logger->pushHandler($handler);

        return $logger;
    };

    $container['renderer'] = function (ContainerInterface $c) {
        $settings = $c->get('settings')['renderer'];
        $renderer = new PhpRenderer($settings['template_path']);
        return $renderer;
    };
    //Register PDO DB Connection into DIC
    $container['PDO'] = function (ContainerInterface $container) {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=ToDoList', 'root', 'password');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    };
    //Registering ToDoModelFactory in DIC
    $container['ToDoModel'] = DI\Factory('\App\Factories\ToDoModelFactory');
    //Registering HomepageControllerFactory in DIC
    $container['HomepageController'] = DI\Factory('\App\Factories\HomepageControllerFactory');
    //Registering CompletedPageControllerFactory in DIC
    $container['CompletedPageController'] = DI\Factory('\App\Factories\CompletedPageControllerFactory');
    //Registering AddItemControllerFactory in DIC
    $container['AddItemController'] = DI\Factory('\App\Factories\AddItemControllerFactory');
    //Registering DeleteItemControllerFactory in DIC
    $container['DeleteItemController'] = DI\Factory('\App\Factories\DeleteItemControllerFactory');
    //Registering CompletedItemControllerFactory in DIC
    $container['CompletedItemController'] = DI\Factory('\App\Factories\CompletedItemControllerFactory');
    //Registering UnCompletedItemControllerFactory in DIC
    $container['UnCompletedItemController'] = DI\Factory('\App\Factories\UnCompletedItemControllerFactory');
    //Registering getFilteredListControllerFactory in DIC
    $container['GetFilteredListController'] = DI\Factory('\App\Factories\GetFilteredListControllerFactory');

    $containerBuilder->addDefinitions($container);
};
