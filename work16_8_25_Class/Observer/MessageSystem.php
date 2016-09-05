<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/5
 * Time: 16:09
 */

namespace Obs;

include "./IObservable.php";
use IObservable;

//实现IObservable接口
class MessageSystem implements IObservable
{
    private $_observers = array();

    public function addObserver($observer)
    {
        $this->_observers = $observer;
    }

    public function doNotify()
    {
        foreach ($this->_observers as $o) {
            $o->notify();
        }
    }
}
