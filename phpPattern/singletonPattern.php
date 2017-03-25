<?php
/**
 * Created by PhpStorm.
 * User: cyb
 * Date: 2017/3/23
 * Time: 0:24
 *
 * 描述：单例模式实例
 *
 */
header("content-type:text/html;charset=utf-8");

class Man{
//    保存实例的属性
    private static $_instance;

//    私有构造函数，防止直接创建对象
    private function __construct(){
        echo "被实例化了";
    }

//    用于创建类对象的静态方法(单例方法)
    public static function getInstance(){
        var_dump(isset(self::$_instance));

        if(!isset(self::$_instance)){
            self::$_instance = new self;
        }
        return self::$_instance;
    }

//    防止用户复制对象实例
    private function __clone(){
        trigger_error("clone is not allow",E_USER_ERROR);
    }

    function test(){
        echo "say something!!!!";
    }
}

//实例化类
$man = Man::getInstance();

//不能克隆对象
//$man1 = clone $man;
//$man1->test();

//调用方法
$man->test();




