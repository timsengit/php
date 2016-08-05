<?php

include './Sort.php';

$arr = array(4, 3, 1, 9, 2, 7, 5, 8, 6);
echo " sort...";
$Sort = new \Sort\Sort();
echo "<pre>" . "希尔排序：";
print_r($Sort->shellSort($arr));
echo "<pre>" . "选择排序：";
print_r($Sort->selectSort($arr));
echo "<pre>" . "插入排序：";
print_r($Sort->insertSort($arr));
echo "<pre>" . "冒泡排序：";
print_r($Sort->bubbleSort($arr));
echo "<pre>" . "快速排序：";
$quickSortArr = $Sort->quickSort($arr);
print_r($quickSortArr);
echo "<pre>";
