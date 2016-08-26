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

    public function preg($pattern, $subject, &$matches)
    {
        $str1 = '';
        return preg_match($pattern, $subject, $matches);
    }
}
