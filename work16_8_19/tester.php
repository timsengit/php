<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/9
 * Time: 13:42
 */
include "./Regexer.php";
$regex   = new \Regex\Regexer();
$subject = 'foobar: 2008';
$pattern = '/\bfooba/';
//echo $regex->preg($pattern, $subject, $matches);
//echo $matches[0];
//var_dump($matches);
//1
//2
//3
//从URL中获取主机名称
$regex->preg('@^(?:http://)?([^/]+)@i',
    "http://www.yaochufa.com/index.php", $matches);
//$regex->preg('/\bwww/',
// "http://www.yaochufa.com/index.php", $matches);
echo "host:" . $host = $matches[0] . "<pre>";
var_dump($matches);
//获取主机名称的后面两部分
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is: {$matches[0]}\n";
