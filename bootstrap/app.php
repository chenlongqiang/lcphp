<?php
/**
 * Created by PhpStorm.
 * User: longqiang.chen
 * Date: 2020/9/10
 * Time: 11:09
 */

define('APP_ROOT', realpath(dirname(__DIR__)));

require(APP_ROOT . '/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(APP_ROOT);
$dotenv->load();
