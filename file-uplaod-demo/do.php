<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/2
 * Time: 10:36
 */
include "./uploader.php";
$up = new \File\UpLoad\Uploader();
//var_dump($_FILES);
echo "<pre>";
//$arrr = $_FILES;
//var_dump($arrr);
$up->SetFile($_FILES);
var_dump($up->Upload());
