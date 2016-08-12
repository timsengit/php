<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/11
 * Time: 17:27
 */

namespace Ycf\Lession\MessageBoard;

class Messager
{
//处理消息的展示和保存
    public function shwoMessages()
    {
        $strShow = "";
//读取文件
        $handle = fopen("./file/messages.txt", "r+");
        while (!feof($handle)) {
            $content = fgets($handle);
            $strShow = $strShow . $content . "<br>";
        }
        fclose($handle);
        return $strShow;
    }
    public function saveMessage($name, $content)
    {
        $date = date("Y-m-d H:i:s"); //文件保存日期
        if ($name != '') {
            //打开文件

            $fh = fopen("./file/messages.txt", "a+");

            fwrite($fh, "$date" . " \r\n    " . "$name   " . "$content" . "\r\n");
            fclose($fh);
        }

    }
}
