<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/13
 * Time: 16:49
 */
include "../session/Session.php";
$session = new \Ycf\Lession\Session\Session();
$session->setSession('loadName', '');
$session->setSession('passWord', '');
$session->delSession();
header('Location:viewOfLog.php');
