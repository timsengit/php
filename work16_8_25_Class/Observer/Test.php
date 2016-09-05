<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/5
 * Time: 15:25
 */
/**
 *参考IBM官网：http://www.ibm.com/developerworks/cn/opensource/os-php-designptrns/
 *@author http://www.phpddt.com
 */
include "./User.php";
use Obs\MessageSystem;
include "./MessageSystem.php";
use Obs\User;
//使用
$u = new MessageSystem();

$u->addObserver(new User('小明'));
//$u->addObserver(new User('小红'));
//$u->addObserver(new User('小黑'));

$u->doNotify();
