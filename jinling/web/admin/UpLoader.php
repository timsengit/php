<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/12
 * Time: 2:20
 */

namespace Jinling\UpLoad;

class UpLoader
{

    public function file($fileName, $tempName, $fileSize)
    {

        if (is_array($fileName)) {
            for ($i = 0; $i < 1; $i++) {
                //  for ($i = 0; $i < count($fileName); $i++) {
                //单文件上传
                $temp = $tempName[$i];
                $size = $fileSize[$i];
//设置保存的目录文件夹
                $name = './images/' . $fileName[$i];
                $this->singleUpload($temp, $name, $size);
            }
        }
    }
    public function singleUpload($temp, $fileName, $size)
    {
        $finalName = $this->finalName($fileName);
        if (is_bool($this->checkFileSize($size))) {
            move_uploaded_file($temp, $finalName); //上传
        }
    }
    public function checkFileSize($size)
    {
        if ($size > 1000000) {
            //判断
            return false;
        } else {
            return true;}
    }
    public function finalName($name)
    {
        $finalName = iconv("utf-8", "gb2312", $name);
        return $finalName;
    }
}
