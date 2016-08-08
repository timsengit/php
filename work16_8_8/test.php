<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/8
 * Time: 10:49
 */
#1,
$empty = '';
$null  = null;
$bool  = false;
$notSet;
$array = array();
$a     = 1;
$x     = &$a;
$b     = $a++;
echo '$b: ' . $b;
echo "<pre>";
echo '$x: ' . $x;
#用最少的代码求三值中的最大值
$a   = 4;
$b   = 2;
$c   = 9;
$max = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);
echo "<pre>" . '$a:' . "$a" . '  $b:' . "$b" . '  $c:' . "$c";
echo "<pre>" . "Max:" . "$max";
#输出结果并写出原因
$b = 201;
$c = 40;
$a = $b > $c ? 4 : 5;
echo "<pre>" . '$a : ' . $a;
#原因：先比较$b和$c，$b>$c为真，故$a取4:5中的前者
#输出结果并声明原因
function timesTwo($int)
{
    $int = $int * 2;
}
$int1   = 2;
$result = timesTwo($int1);
echo "<pre>" . '$result: ' . "$result";
echo "<pre>";
#输出结果为空原因为函数没有返回值
#输出结果并说明原因
$str1 = null;
$str2 = false;
echo "<pre>" . $str1 == $str2 ? '相等' : 'null false不相等' . "<pre>";
#nullfalse值不相等
$str3 = '';
$str4 = 0;
echo "<pre>" . $str3 == $str4 ? '空和0相等' : '不相等' . "<pre>";
#空白字符串和字符串‘0’被认为是FALSE，故相等
$str5 = 0;
$str6 = '0';
echo "<pre>" . $str5 == $str6 ? '相等' : '0 0不相等';
#不相等原因：'0'位文本，0为整型值
echo "<pre>";
#描述isset()和empty（）函数的区别和使用场景
$a1 = null;
$a2 = false;
$a3 = 0;
$a4 = '';
$a5 = '0';
$a6 = 'null';
$a7 = array();
$a8 = array(array());
echo 'empty（$a1)' . (empty($a1) ? '（如果检验值为非空或非零则为false）true' : 'false');
echo '  isset($a1)' . (isset($a1) ? 'true' : '因为$a1为空未被设置false') . "<pre>";
echo 'empty（$a2)' . (empty($a2) ? '（如果检验值为非空或非零则为false）true' : 'false');
echo '  isset($a2)' . (isset($a2) ? 'true' : '为空未被设置false') . "<pre>";
echo 'empty（$a3)' . (empty($a3) ? '（如果检验值为非空或非零则为false）true' : 'false');
echo '  isset($a3)' . (isset($a3) ? 'true' : '为空未被设置false') . "<pre>";
echo 'empty（$a4)' . (empty($a4) ? '（如果检验值为非空或非零则为false）true' : 'false');
echo '  isset($a4)' . (isset($a4) ? 'true' : '为空未被设置false') . "<pre>";
echo 'empty（$a5)' . (empty($a5) ? '（如果检验值为非空或非零则为false）true' : 'false');
echo '  isset($a5)' . (isset($a5) ? 'true' : '为空未被设置false') . "<pre>";
echo 'empty（$a6)' . (empty($a6) ? '（如果检验值为非空或非零则为false）true' : 'false');
echo '  isset($a6)' . (isset($a6) ? 'true' : '为空未被设置false') . "<pre>";
echo 'empty（$a7)' . (empty($a7) ? '（如果检验值为非空或非零则为false）true' : 'false');
echo '  isset($a7)' . (isset($a7) ? 'true' : '为空未被设置false') . "<pre>";
echo 'empty（$a8)' . (empty($a8) ? '（如果检验值为非空或非零则为false）true' : 'false');
echo '  isset($a8)' . (isset($a8) ? 'true' : '为空未被设置false') . "<pre>";
#empty()检验一个变量是否为空  isset()检测变量是否被设置
echo "<pre>";
#输出结果并说明原因
$count = 5;
function get_count()
{
    static $count = 0;
    return $count++;
}
echo '$count: ' . $count;
++$count;
echo '  after ++$count ' . "$count";
echo ' first times call get_count() : ' . get_count();
echo ' third times call get_count()' . get_count();
echo "call get_count()" . get_count();
#static声明静态变量后不再执行初始化操作（$cunt=0)
#8不使用第三个变量交换两个变量的值
$a = 9;
$b = 8;
echo "<pre>";

echo 'before exchange : $a : ' . $a . ' $b : ' . $b . "<pre>";

$a = $a + $b;
//交换$bb
$b = $a - $b;
//交换$b
$a = $a - $b;
echo 'after exchange : $a : ' . $a . ' $b : ' . $b . "<pre>";
#9 $arr=[‘zhangsan’,’lisi’,’wangwu’]; 将数组的值用‘,’分隔并合成字符串 zhangsan,lisi,wangwu
$arr = ['zhangsan', 'lisi', 'wangwu'];
$str = implode(',', $arr);
echo "arr to str : " . $str . "<pre>";
#10 要求写一段程序，实现以下$arrOne转换为$arrTwo（数组的重新组合）
$arrOne = array(
    0 => array('fid' => 1, 'tid' => 1, 'name' => 'xiaoming'),
    1 => array('fid' => 1, 'tid' => 2, 'name' => 'zhangsan'),
    2 => array('fid' => 1, 'tid' => 5, 'name' => 'lisi'),
    3 => array('fid' => 1, 'tid' => 7, 'name' => 'wangwu'),
    4 => array('fid' => 3, 'tid' => 9, 'name' => 'zhaoliu'),
);
function farmtArr($arrone)
{
    $fidcount  = 0;
    $arrresult = array(array());
//fid=1的数组
    $arrfid1 = array(array());
//fid=3的数组
    $arrfid3 = array(array());
    //第一层数组
    foreach ($arrone as $key => $value) {
//第二层数组
        foreach ($value as $key2 => $value2) {
            if ($key2 == 'fid') {
                if ($value2 == 1) {
//统计fid=1的个数
                    //如果fid==1则将这个数组添加到arrTwo的【0】组                    //  array_slice()
                    //向arrTwo的第一层填充剪切过得arrOne第二层数组
                    $arrfid1[$fidcount] = array_slice($value, 1);
                    $fidcount++;
                }
                if ($value2 == 3) {
                    $arrfid3[0] = array_slice($value, 1);
                }
            }

        }

    }
//合成
    $arrresult[0] = $arrfid1;
    $arrresult[1] = $arrfid3;
    return $arrresult;
    // return $arrfid1;
    //return $arrfid3;
}

print_r(farmtArr($arrOne));
#11封住一个类对二维数组进行排序（数组的排序）
class twoSorter
{
    public function my_sort($arrays, $sort_key)
    {
        $sort_order = SORT_ASC;
        $sort_type  = SORT_NUMERIC;
        if (is_array($arrays)) {
            foreach ($arrays as $array) {
                if (is_array($array)) {
                    $key_arrays[] = $array[$sort_key];
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
        array_multisort($key_arrays, $sort_order, $sort_type, $arrays);
        return $arrays;
    }
}
$arr = array(
    array('id' => 1, 'age' => 21),
    array('id' => 2, 'age' => 24),
    array('id' => 100, 'age' => 97),
    array('id' => 45, 'age' => 2),
);
echo "排序前： " . "<pre>";
print_r($arr);
$twosorter = new twoSorter();
$arr       = $twosorter->my_sort($arr, 'id');
echo "按照id排序后：";
print_r($arr);
$arr = $twosorter->my_sort($arr, 'age');
echo "按照age排序后：";
print_r($arr);
#12熟练掌握php数组函数并解释下面列出的函数（根据php手册做练习）
#13 选做：利用for 循环输出99乘法表可以x轴y轴对称
for ($index1 = 1; $index1 < 10; $index1++) {
    echo "<pre>";
    for ($index = $index1; $index < 10; $index++) {
        echo " $index1" . '*' . " $index" . '= ' . $index1 * $index;

    }
}
