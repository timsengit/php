<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/5
 * Time: 13:36
 */
namespace Registry;

//创建单例
class Single
{
    public $hash;
    protected static $ins = null;
    final protected function __construct()
    {$this->hash = rand(1, 9999);}
    public static function getInstance()
    {
        if (self::$ins instanceof self) {
            return self::$ins;
        }
        self::$ins = new self();
        return self::$ins;
    }
}
//工厂模式
class RandFactory
{
    public static function factory()
    {return Single::getInstance();}}
//注册树
class Register
{
    protected static $objects;
//将新建的对象添加到注册树上
    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }
//从注册树上取下对象
    public static function get($alias)
    {
        return self::$objects[$alias];
    }
//释放对象
    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}
