<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/18
 * Time: 22:34
 */
include "./connecter/PDOX.php";
include "./connecter/DBConfig.php";
$pdo = new PDOX($DSN, $USER, $PASS);
include "./session/Session.php";
session_start();
$session = new \Jinling\Session\Session();
$name    = $_POST['title'];
$news    = $_POST['content'];
$adder   = $session->showSession("name");
$addTime = date('Ymd');
echo $name . $news . $adder . $addTime;
$arr = array('name' => $name, 'news' => $news, 'adder' => $adder, 'addTime' => $addTime);
$pdo->insert('news', $arr);
header('Location:news_list.php');
