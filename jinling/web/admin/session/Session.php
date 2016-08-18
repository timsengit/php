<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/13
 * Time: 15:44
 */

namespace Jinling\Session;

class Session
{

    public function setSession($key, $val)
    {
        $_SESSION[$key] = $val;
    }
    public function showSession($key)
    {
        return $_SESSION[$key];
    }
    public function delSession()
    {
        session_destroy();
    }
}
