<?php

/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/30
 * Time: 8:58
 * _construct()
 *调试输出类，读取ini.php配置文件，如果$ISDEBUGE=true则进行输出 */
class Say
{
    public $isDebuge = "";
    public function Say($isDebuge)
    {
        $this->isDebuge = $isDebuge;
    }
    public function sayecho($message)
    {
        if ($this->isDebuge) {
            echo "<pre>$message</pre>";
        }

    }
    public function sayvar($array)
    {
        if ($this->isDebuge) {
            echo "<pre>";
            var_dump($array);
        }

    }
}
