<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/9
 * Time: 13:41
 */

namespace Regex;

class Regexer
{
    public function regexerArray($arr)
    {
        /*
         *使用正则表达式找出数组中以字母开始和以数字结束，并且没有空格的单元
         */
        foreach ($arr as $row) {
            if (preg_match('/^[a-zA-Z]\S*[0-9]$/', $row)) {
                $str[] = $row;
            }
        }
        return $str;
    }
    public function regexerHttp($http)
    {
        /*
         * 使用正则分解http
         *
         */
        $re = '@^(http://)+(\w+.)(\w+.)(\w+.)(\w.*)@i';
        if (preg_match($re, $http, $date)) {
            $str[] = $date;
        }
        return $str;
    }
    public function takeInte($text)
    {
        /*
         *正则取出上面字符串里的所有网址
         */
        preg_match_all('/<a\s.*?href=[\'|\"]([^\"\']*)[\'|\"][^>]*>/is', $text, $matched);
        return $matched[1];
    }
    public function deleteHtml($text)
    {
        /*
         *通过替换的方式除掉所有html标签
         */
        $delect = '/<\/?[^>]+>/';
        $arr    = preg_replace($delect, '', $text); //直接返回
        return $arr;
    }
}
