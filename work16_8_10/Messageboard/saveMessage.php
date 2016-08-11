<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/12
 * Time: 0:03
 */
include "./Messager.php";
$messager = new \Ycf\Lession\MessageBoard\Messager();
$name     = $_POST["username"]; //提交昵称
$content  = $_POST["content"]; //消息主体
$messager->saveMessage($name, $content);
//加载原地址
header('Location:guest.php');
