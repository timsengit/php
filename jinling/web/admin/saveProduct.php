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

include "./UpLoader.php";
$uploader = new \Jinling\UpLoad\UpLoader();
$file     = 'file';
$fileName = $_FILES["$file"]['name'];
$tempName = $_FILES["$file"]['tmp_name'];
$fileSize = $_FILES["$file"]['size'];
$uploader->file($fileName, $tempName, $fileSize);
echo "upLoadsuccess...";

session_start();
$session     = new \Jinling\Session\Session();
$name        = $_POST['name'];
$pathOfPic   = './images/' . $fileName[0];
$description = $_POST['description'];
$adder       = $session->showSession("name");
$addTime     = date('Ymd');
echo $pathOfPic;
$arr = array('name' => $name, 'pathOfPic' => $pathOfPic, 'description' => $description, 'adder' => $adder, 'addTime' => $addTime);
$pdo->insert('product', $arr);

header('Location:product_list.php');
