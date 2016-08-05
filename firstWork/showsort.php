<html>
<head>
<title>排序算法演示：</title>
</head>
<body>

<?php

require_once("./sortes.php");


$arr=array(4,3,1,9,2,7,5,8,6);
show($arr);

echo "</br>插入排序：";
$arrinsert=insert_sort($arr);
show($arrinsert);

echo "</br>冒泡排序：";
$arrbubble=bubble_sort($arr);
show($arrbubble);

echo "</br>选择排序：";
$arrselect=select_sort($arr);
show($arrselect);
//echo `dir c:`;
echo "</br>快速排序：";
$arrquick=quick_sort($arr);
show($arrquick);
echo "</br>希尔排序：";
$arrshell=shell_sort($arr);
show($arrshell);

function show($arr3)
{
	for ($i=0; $i <count($arr3) ; $i++) { 
		# code...
		echo " ".$arr3[$i];
	}
}
?>
</body>
</html>