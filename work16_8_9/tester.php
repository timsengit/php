<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/9
 * Time: 13:42
 */
include "./StrDoer.php";
$StrDoer = new \Str\StrDoer();
echo $StrDoer->one();
echo "<pre>";
echo $StrDoer->two();
echo "<pre>";
$str = "my_leader";
echo $StrDoer->three($str);
echo "<pre>";
echo $StrDoer->four("ssdfs@qq.com");
echo "<pre>";
$str = "There is hainan";
echo "<pre>";
echo $str[count($str) + 20];
//echo " " == null ? "ssss" : "hhhhh";
echo "<pre>";
print_r($StrDoer->five($str));
echo "<pre>";
echo $StrDoer->six("绍峰地方史蒂芬森史蒂水电费了水电费水电啊");
