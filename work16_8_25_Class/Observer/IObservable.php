<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/5
 * Time: 16:09
 */
//定义可以被观察的对象接口
interface IObservable
{
    public function addObserver($observer);
}
