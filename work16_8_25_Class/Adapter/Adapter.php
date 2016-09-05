<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/5
 * Time: 15:11
 */

namespace Ad;

include "./Target.php";
//类适配器角色
class Adapter implements Target
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    //委派调用Adaptee的sampleMethod1方法
    public function request()
    {
        echo $this->adaptee->request();
    }

}
