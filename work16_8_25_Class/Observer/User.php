<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/5
 * Time: 16:06
 */

namespace Obs;

include "./IObserver.php";
use IObserver;

//实现IObserver接口
class User implements IObserver
{
    public function __construct($username)
    {
        echo "我是新用户{$username}<br/>";
    }
    //通知观察者方法
    public function notify()
    {
        echo '欢迎新用户';
    }
}
