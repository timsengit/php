<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/9
 * Time: 9:36
 */

namespace Work;

class Work
{
    public function one()
    {
        $empty = '';
        $null  = null;
        $bool  = false;
//        $notSet;
        $array = array();
        $a     = 1;
        $x     = &$a;
        $b     = $a++;
        return '$b: ' . $b;
    }
    public function twoMax($a, $b, $c)
    {
        return "Max:" . $max = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);
    }
    public function three()
    {
        $b = 201;
        $c = 40;
        $a = $b > $c ? 4 : 5;
        echo "<pre>" . '$a : ' . $a;
    }
    public function four()
    {
        function timesTwo($int)
        {
            $int = $int * 2;
        }
        $int1   = 2;
        $result = timesTwo($int1);
        return '$result: ' . "$result" . "输出结果为空原因为函数没有返回值";
    }
    public function fiveA()
    {
        $str1 = null;
        $str2 = false;
        return $str1 == $str2 ? 'null false相等' : '不相等';
    }
    public function fiveB()
    {
        $str3 = '';
        $str4 = 0;
        return $str3 == $str4 ? '空和0相等' : '不相等' . "<pre>";
    }
    public function fiveC()
    {
        $str5 = 0;
        $str6 = '0';
        return $str5 == $str6 ? '0 和文本0相等' : '不相等';
    }
    public function sixEmptyIsset()
    {
        $a1 = null;
        $a2 = false;
        $a3 = 0;
        $a4 = '';
        $a5 = '0';
        $a6 = 'null';
        $a7 = array();
        $a8 = array(array());
        return 'empty（$a1)' . (empty($a1) ? '（如果检验值为非空或非零则为false）true' : 'false') .
            '  isset($a1)' . (isset($a1) ? 'true' : '因为$a1为空未被设置false') . "<pre>" .
            'empty（$a2)' . (empty($a2) ? '（如果检验值为非空或非零则为false）true' : 'false') .
            '  isset($a2)' . (isset($a2) ? 'true' : '为空未被设置false') . "<pre>" .
            'empty（$a3)' . (empty($a3) ? '（如果检验值为非空或非零则为false）true' : 'false') .
            '  isset($a3)' . (isset($a3) ? 'true' : '为空未被设置false') . "<pre>" .
            'empty（$a4)' . (empty($a4) ? '（如果检验值为非空或非零则为false）true' : 'false') .
            '  isset($a4)' . (isset($a4) ? 'true' : '为空未被设置false') . "<pre>" .
            'empty（$a5)' . (empty($a5) ? '（如果检验值为非空或非零则为false）true' : 'false') .
            '  isset($a5)' . (isset($a5) ? 'true' : '为空未被设置false') . "<pre>" .
            'empty（$a6)' . (empty($a6) ? '（如果检验值为非空或非零则为false）true' : 'false') .
            '  isset($a6)' . (isset($a6) ? 'true' : '为空未被设置false') . "<pre>" .
            'empty（$a7)' . (empty($a7) ? '（如果检验值为非空或非零则为false）true' : 'false') .
            '  isset($a7)' . (isset($a7) ? 'true' : '为空未被设置false') . "<pre>" .
            'empty（$a8)' . (empty($a8) ? '（如果检验值为非空或非零则为false）true' : 'false') .
            '  isset($a8)' . (isset($a8) ? 'true' : '为空未被设置false') . "<pre>";
    }
    public function sevenStatic()
    {
        $count = 5;

        function get_count()
        {
            static $count = 0;
            return $count++;
        }
        $resultstr = '$count: ' . $count;
        ++$count;
        $resultstr = $resultstr . '  after ++$count ' . "$count";
        $resultstr = $resultstr . ' first times call get_count() : ' . get_count();
        $resultstr = $resultstr . ' third times call get_count()' . get_count();
        $resultstr = $resultstr . "<pre>" . 'static声明静态变量后不再执行初始化操作（$cunt=0)';
        return $resultstr;
    }
    public function eightExchange($a, $b)
    {
        $resultstr = 'before exchange : $a : ' . $a . ' $b : ' . $b . "<pre>";
        $a         = $a + $b;
//交换$bb
        $b = $a - $b;
//交换$b
        $a         = $a - $b;
        $resultstr = $resultstr . 'after exchange : $a : ' . $a . ' $b : ' . $b . "<pre>";
        return $resultstr;
    }
    public function nineImplode()
    {
        $arr = ['zhangsan', 'lisi', 'wangwu'];
        $str = implode(',', $arr);
        return "arr to str : " . $str . "<pre>";
    }
    public function tenFarmtArr($arrone)
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
    public function elevenSort($arrays, $sort_key)
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
    public function arrayChunk($arr, $size, $flag)
    {
        return array_chunk($arr, $size, $flag);
    }
    public function arrayCombin($keys, $values)
    {
        return array_combine($keys, $values);
    }
    public function arrayKeyExists($key, $arrsearch)
    {
        return array_key_exists($key, $arrsearch);
    }
    public function arrayKeys($input)
    {
        return array_keys($input);
    }
    public function arrayMerge($arr, $arr2)
    {
        return array_merge($arr, $arr2);
    }
    public function arrayMergeRecu($arr, $arr2)
    {
        return array_merge_recursive($arr, $arr2);
    }
    public function arrayPop($arr)
    {
        return array_pop($arr);
    }
    public function thirteen()
    {
        $resultstr = '';
        for ($index1 = 1; $index1 < 10; $index1++) {
            $resultstr = $resultstr . "<pre>";
            for ($index = $index1; $index < 10; $index++) {
                $resultstr = $resultstr . " $index1" . '*' . " $index" . '= ' . $index1 * $index;

            }
        }
        return $resultstr;
    }

}
