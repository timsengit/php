<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/29
 * Time: 17:09
 */
//include "./connecter/PDOX.php";
//include "./connecter/DbConfig.php";
//$pdo = new Pdox($DSN, $USER, $PASS);
include "./ini.php";
include "./Say.php";
$say = new Say($ISDEBUGE);
//上传文件
include "./uploader.php";
$up = new \File\UpLoad\Uploader();
$up->SetFile($_FILES);
var_dump($up->Upload());
