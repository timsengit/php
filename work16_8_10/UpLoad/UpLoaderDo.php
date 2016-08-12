<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/12
 * Time: 10:29
 */
include "./UpLoader.php";
$uploader = new \Ycf\Lession\UpLoad\UpLoader();
$file     = 'file';
$fileName = $_FILES["$file"]['name'];
$tempName = $_FILES["$file"]['tmp_name'];
$fileSize = $_FILES["$file"]['size'];
$uploader->file($fileName, $tempName, $fileSize);
echo "upLoadsuccess...";
