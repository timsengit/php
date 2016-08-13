<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/12
 * Time: 18:11
 */

namespace Ycf\Lession\Cook;

class Cook
{
    public function setCook($value)
    {
        setcookie("TestCookie", $value);
    }
    public function showCook()
    {
        return $_COOKIE['TestCookie'];
    }
    public function deleteCook()
    {
        //设置失效
        setcookie("TestCookie", "", time() - 3600);
    }

}
