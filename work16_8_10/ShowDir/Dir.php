<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/12
 * Time: 11:55
 */

namespace Ycf\Lession\ShowDir;

class Dir
{
    public function getfiles($file_path)
    {
//目录数组
        $files = array();
//判断是否为目录
        if (is_dir($file_path)) {
//是目录则试图取得目录句柄
            if ($handle = opendir($file_path)) {
//还有可读文件
                while (($file = readdir($handle)) !== false) {
                    //读取
                    if ($file != "." && $file != "..") {
                        if (is_dir($file_path . "/" . $file)) {
                            $files[$file] = $this->getfiles($file_path . "/" . $file); //避免死循环
                        } else {
                            $files[] = $file_path . "/" . $file;
                        }
                    }
                }
                closedir($handle);
                return $files;
            }
        }
    }
}
