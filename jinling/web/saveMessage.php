<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/12
 * Time: 0:03
 */

include "../db/connecter/Pdox.php";
$dsn     = "mysql:host=localhost;dbname=jinlingdb";
$pdo     = new Pdox($dsn, 'jinling', 'JLining');
$name    = $_POST["username"]; //提交昵称
$content = $_POST["content"]; //消息主体
$addTime = date('Ymd');
$arr     = array('name' => $name, 'message' => $content, 'addTime' => $addTime);
$pdo->insert('messages', $arr);

//加载原地址
header('Location:guestbook.php');
