<?php
/**
 * Created by PhpStorm.
 * User: longqiang.chen
 * Date: 2020/9/10
 * Time: 11:09
 */

$router = new \Bramus\Router\Router();

$router->get('/', function () {
    echo 'hello lcphp';
});

$router->get('/test', App\Controller\TestController::class . '@index');

$router->run();