<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/13
 * Time: 16:28
 */
include "./session/Session.php";
session_start();
$session = new \Jinling\Session\Session();
//session_start();

$session->setSession("name", '');

echo "succ";
header('Location:login.php');

//echo "key ' s value:" . $session->showSession("name"); //echo $username . $password;
//echo $_SESSION['name'];
