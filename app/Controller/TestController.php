<?php
/**
 * Created by PhpStorm.
 * User: longqiang.chen
 * Date: 2020/9/10
 * Time: 16:09
 */
namespace App\Controller;

use App\Model\Test;

class TestController
{
    public function index()
    {
        (new Test())->helloWorld();
    }
}
