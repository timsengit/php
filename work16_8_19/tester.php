<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/9
 * Time: 13:42
 */
include "./Regexer.php";
$regex = new \Regex\Regexer();
$array = array("Linux RedHat9.0", "Apache2.2.9", "MySQL5.0.51", "PHP5.2.6", "LAMP", "100");
echo "<pre><h1> first : </h1><pre>";
var_dump($regex->regexerArray($array));
echo "<pre><h1> second : </h1><pre>";
$row = "http://www.yaochufa.com/index.php";
var_dump($regex->regexerHttp($row));
echo "<pre><h1> third : </h1><pre>";
$arr = "<tr><td><a href=\"http://qzone.qq.com\">QQ空间</a></td><td><a href=\"http://www.ganji.com\">赶 集 网</a></td><td>";
var_dump($regex->takeInte($arr));
echo "<pre><h1> fourth : </h1><pre>";
$arrDelect = "这个文本中有<b>粗体</b>和<u>带有下划线</u>以及<i>斜体</i>还有<font color='red' size='7'>带有颜色和字体大小</font>的标记";
var_dump($regex->deleteHtml($arrDelect));
