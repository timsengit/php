<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/18
 * Time: 22:34
 */
include "./connecter/Pdox.php";
include "./connecter/DbConfig.php";
$pdo = new Pdox($DSN, $USER, $PASS);
include "./session/Session.php";
session_start();
$session    = new \Jinling\Session\Session();
$name       = $_POST['username'];
$password   = $_POST['password'];
$registerIp = '12212111112.22';
$addTime    = date('Ymd');
//echo $name . $news . $adder . $addTime;
$arr = array('name' => $name, 'pass' => $password, 'registerIp' => $registerIp, 'addTime' => $addTime);
$pdo->insert('admin', $arr);
header('Location:userList.php');
