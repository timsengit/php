<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/13
 * Time: 15:59
 */
include "./Session.php";
$session = new \Ycf\Lession\Session\Session();
echo "key ' s value:" . $session->showSession("key");
echo "<pre>";
$session->setSession("key", "value");
echo "key ' s value:" . $session->showSession("key");
echo "<pre>";
$session->delSession("key");
echo "key ' s value:" . $session->showSession("key");
$session->setSession("key1", "value1");
echo "<pre>";
echo "key ' s value:" . $session->showSession("key1");
