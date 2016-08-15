<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/15
 * Time: 16:57
 */
include "./Mysqli3.php";
$mysql = new \Ycf\Lession\Db\Sqli();
$mysql->connect('localhost', 'ycf', 'b50unl', 'ycfdb');
$arr = array('id' => 1, 'name' => 'timmmm');
//echo 'affected rows:' . $mysql->insert($arr, 'test');
$arr1 = array('id' => 1, 'name' => 'tisdfsdf');
//echo $mysql->update($arr1, 'test');
//echo 'delete rows:' . $mysql->delete('test', 'id=1');
//var_dump($mysql->fetchOne('select * from test'));
//var_dump($mysql->fetchAll('select * from test'));
//echo $mysql->getTotalRows('select * from test');
//echo $mysql->freeResult();
//echo $mysql->close();
