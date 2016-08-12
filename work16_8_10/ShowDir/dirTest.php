<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/12
 * Time: 11:59
 */
include "./Dir.php";
$dir = new Ycf\Lession\ShowDir\Dir();
print_r($dir->getfiles('../'));
