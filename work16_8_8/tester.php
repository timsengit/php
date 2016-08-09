<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/9
 * Time: 9:36
 */
include "./Work.php";

$Work = new \Work\Work();
echo $Work->one();
echo "<pre>" . $Work->twoMax(3, 9, 22);
echo "<pre>" . $Work->three();
echo "<pre>" . $Work->four();
echo "<pre>" . $Work->fiveA();
echo "<pre>" . $Work->fiveB();
echo "<pre>" . $Work->fiveC();
echo "<pre>" . $Work->sixEmptyIsset();
echo "<pre>" . $Work->sevenStatic();
echo "<pre>" . $Work->eightExchange(1, 99);
echo "<pre>" . $Work->nineImplode();
$arrOne = array(
    0 => array('fid' => 1, 'tid' => 1, 'name' => 'xiaoming'),
    1 => array('fid' => 1, 'tid' => 2, 'name' => 'zhangsan'),
    2 => array('fid' => 1, 'tid' => 5, 'name' => 'lisi'),
    3 => array('fid' => 1, 'tid' => 7, 'name' => 'wangwu'),
    4 => array('fid' => 3, 'tid' => 9, 'name' => 'zhaoliu'),
);
print_r($Work->tenFarmtArr($arrOne));
$arrToSort = array(
    array('id' => 1, 'age' => 21),
    array('id' => 2, 'age' => 24),
    array('id' => 100, 'age' => 97),
    array('id' => 45, 'age' => 2),
);
echo "排序前： " . "<pre>";
print_r($arrToSort);
$arrToSort = $Work->elevenSort($arrToSort, 'id');
echo "按照id排序后：";
print_r($arrToSort);
$arrToSort = $Work->elevenSort($arrToSort, 'age');
echo "按照age排序后：";
print_r($arrToSort);
echo "分割函数：" . "<pre>";
$arr = array('10', '2', '3', '4');
print_r($Work->arrayChunk($arr, 2, false));
echo "合成函数:" . "<pre>";
$arr2 = array('a', 'b', 'c', 'd');
print_r($Work->arrayCombin($arr, $arr2));
echo "Key Exits:" . "<pre>";
$arr3 = $Work->arrayCombin($arr, $arr2);
echo 'Key:1 exists?: ' . $Work->arrayKeyExists(1, $arr3);
echo "<pre>" . "返回键名：" . "<pre>";
print_r($Work->arrayKeys($arr3));
echo "合并数组：" . "<pre>";
print_r($Work->arrayMerge($arr, $arr2));
$arr4 = array("furit" => array("kind" => "apple"), 10, 20);
$arr5 = array("furit" => array("kind" => "banana"), 50);
echo "合并数组：" . "<pre>";
print_r($Work->arrayMergeRecu($arr4, $arr5));
$arr5 = array(10, 2, 3, 4);
array_multisort($arr5, $arr);
echo "排序";
var_dump($arr5);
var_dump($arr);
echo "弹出POP ";
echo $Work->arrayPop($arr3);
echo 'Push :';
array_push($arr3, 'push');
var_dump($arr3);
echo 'Rand()随机抽取元素  ';
$rand_keys = array_rand($arr3, 2);
print_r($rand_keys);
echo 'Replace ;';
$replace1 = array(0 => 'first', 3 => 'first2');
$replace2 = array(0 => 'second0', 1 => 'second1', 8 => 'second8');
$arr      = array_replace($arr, $replace1, $replace2);
var_dump($arr);
echo $Work->thirteen();
