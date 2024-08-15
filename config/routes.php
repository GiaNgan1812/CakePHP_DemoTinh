<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        // Static method moved into scope
        $builder->connect('/hello', ['controller' => 'Static', 'action' => 'hello']);

        $builder->connect('/', ['controller' => 'Demo', 'action' => 'index']);
        $builder->connect('/demo/view/*', ['controller' => 'Demo', 'action' => 'view']);
        $builder->fallbacks();
    });
};
