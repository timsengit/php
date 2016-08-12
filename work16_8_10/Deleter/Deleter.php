<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/12
 * Time: 13:04
 */

namespace Ycf\Lession\Delete;

class Deleter
{
    public function Del($file_path)
    {
        $Filedir = opendir($file_path); //获取目录索引
        while (($file = readdir($Filedir)) !== false) {
//读取
            $dirFile = $file_path . "/" . $file;
            if ($file != "." && $file != "..") {
                if (is_dir($dirFile)) {
//ÅÐ¶Ï
                    $this->Del($dirFile);
                } else {
                    unlink($dirFile); //删除
                }
            }
        }
        closedir($Filedir);
        //已删除所有文件
        //删除文件夹
        rmdir($file_path);
        if (is_file($dirFile)) {
            return true;
        } else {
            return false;
        }
    }
}
