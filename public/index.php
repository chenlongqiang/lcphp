<?php
/**
 * Created by PhpStorm.
 * User: longqiang.chen
 * Date: 2020/9/10
 * Time: 11:09
 */
$rootPath = realpath(dirname(__DIR__));

require($rootPath . '/bootstrap/app.php');

require($rootPath . '/routes/web.php');
