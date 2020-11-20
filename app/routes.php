<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'HomepageController');

    $app->post('/addItem', 'AddItemController');

    $app->post('/deleteItem/{item}', 'DeleteItemController');

    $app->post('/completedItem/{item}', 'CompletedItemController');

    $app->post('/unCompletedItem/{item}', 'UnCompletedItemController');

    $app->post('/filteredList', 'GetFilteredListController');

    $app->get('/CompletedPage', 'CompletedPageController');

};
