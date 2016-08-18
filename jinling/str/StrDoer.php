<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/9
 * Time: 13:41
 */

namespace Str;

class StrDoer
{
    public function one()
    {
        $str = 1112223334445;
//分割
        $arr1  = str_split($str, 3);
        $strre = '';
        for ($i = 0; $i < count($arr1); $i++) {
            $strre = $strre . $arr1[$i];
//添加，
            if ($i < count($arr1) - 1) {
                $strre = $strre . ",";
            }
        }
        return strrev($strre);
    }
    public function two()
    {
        $str = "www.yaochufa.com";
        return strrev(str_replace("www", "", $str));
    }
    public function three($str)
    {
        $resultstr = '';
//分割
        $str1 = explode("_", $str);
        for ($i = 0; $i < count($str1); $i++) {
//首字母大写
            $resultstr = $resultstr . ucfirst($str1[$i]);
        }
        return $resultstr;
    }
    public function four($str)
    {
        $str1 = strstr($str, "@");
        $str1 = str_replace("@", "", $str1);
        return $str1;
    }
//取得字符串长度
    public function getStrLeng($str)
    {
        $leng = 0;
        while ($str[$leng] != '') {
            $leng++;
        }
        return $leng;
    }
    public function five($str)
    {

        $arr       = array();
        $arr1      = '';
        $ii        = 0;
        $resultstr = '';
        for ($i = 0; $i < $this->getStrLeng($str); $i++) {

            if ($str[$i] == " " || $str[$i + 1] == '') {
//当读取到空格或者尾巴时将这个串加入到Array【012345】并置空串
                $arr[$ii++] = $arr1;
                $arr1       = '';
            }
            $arr1 = $arr1 . $str[$i];
        } //以上部分生成数组
        ///连接字符串
        for ($i = count($arr); $i > -1; $i--) {
            $resultstr = $resultstr . $arr[$i] . " ";
        }
        return $resultstr;
    }
    public function six($str)
    {
        $str1 = '';
        //一个中文字符为3
        $str1 = substr($str, 0, 39) . "...";
        return $str1;
    }
}
