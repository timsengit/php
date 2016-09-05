<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/5
 * Time: 14:38
 */

include "./Adaptee.php";
include "./Adapter.php";
use Ad\Adaptee;
use Ad\Adapter;

//客户端
class Client
{

    public static function main()
    {
        $adaptee = new Adaptee();
        $adapter = new Adapter($adaptee);
        $adapter->request();
    }
}

Client::main();
