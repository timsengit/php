<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/12
 * Time: 18:19
 */
include "./Cook.php";
$cook = new \Ycf\Lession\Cook\Cook();
echo $cook->showCook();
$cook->setCook("something");
$cook->setCook("second");
$cook->deleteCook();
