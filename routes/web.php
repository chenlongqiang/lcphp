<?php
/**
 * Created by PhpStorm.
 * User: longqiang.chen
 * Date: 2020/9/10
 * Time: 11:09
 */
use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function(){
    echo 'hello lcphp';exit;
});
Macaw::get('/test', App\Controller\TestController::class . '@index');

Macaw::dispatch();
