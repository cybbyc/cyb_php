<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/24
 * Time: 15:28
 *
 * 描述：接口实例
 *
 */

//定义一个接口
interface Person{
    const CON = "CONSTANT value";
    function fun1();
    function fun2();
}

//定义第二个接口继承第一个接口，实现接口之间的扩展，使用extends扩展
interface Man extends Person{

}





