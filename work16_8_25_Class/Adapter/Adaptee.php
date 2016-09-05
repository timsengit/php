<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/5
 * Time: 15:10
 */

namespace Ad;

//源角色
class Adaptee
{

    public function request()
    {
        echo 'Adaptee ' . "<br>";
    }
}
