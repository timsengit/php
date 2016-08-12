<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/12
 * Time: 13:07
 */
include "./Deleter.php";
$deleter = new \Ycf\Lession\Delete\Deleter();
$deleter->Del("./example");
