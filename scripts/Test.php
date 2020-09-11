<?php
/**
 * Created by PhpStorm.
 * User: longqiang.chen
 * Date: 2020/9/10
 * Time: 11:09
 */

require_once '../bootstrap/app.php';

class Test
{
    public function exec()
    {
        echo 'test';
    }
}

(new Test())->exec();
