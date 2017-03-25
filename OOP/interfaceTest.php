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
header("content-type:text/html;charset=utf-8");
//定义一个接口
interface One{
    const CON = "CONSTANT value";
    function fun1();
    function fun2();
}

//定义第二个接口继承第一个接口，实现接口之间的扩展，使用extends扩展
interface Two extends One{
    function fun3();
    function fun4();
}


//抽象类实现接口
abstract class Three implements One{
//    实现接口 One 中的fun1() 方法
    function fun1(){
        echo "在抽象类中实现了接口中的一个方法<br>";
    }

}

//声明一个普通类实现接口
class Four implements One{
    function fun1(){
        echo "在普通类中实现了接口中的一个方法<br>";
    }

    function fun2(){
        echo "在普通类中实现了接口中的第二个方法，把接口种的所有方法实现了<br>";
    }
}

//一个类中实现多个接口
class Five implements One,Two{
    function fun1(){
        echo "实现了接口One中的fun1()方法<br>";
    }

    function fun2(){
        echo "实现了接口One中的fun2()方法<br>";
    }
    function fun3(){
        echo "实现了接口Two中的fun3()方法<br>";
    }
    function fun4(){
        echo "实现了接口Two中的fun4()方法<br>";
    }
}

//类实现Two接口，Two接口已经继承了One接口,则继承类必须实现Two和One接口中的所有方法
class Six implements Two{
    function fun1(){
        echo "实现了接口One中的fun1()方法<br>";
    }

    function fun2(){
        echo "实现了接口One中的fun2()方法<br>";
    }
    function fun3(){
        echo "实现了接口Two中的fun3()方法<br>";
    }
    function fun4(){
        echo "实现了接口Two中的fun4()方法<br>";
    }
}

//普通类继承抽象类Three,Three类实现One接口，必须把接口中的所有方法都实现
class Seven extends Three{
    function fun1(){

    }
    function fun2(){

    }
}



//直接使用接口中的常量
echo One::CON."<br>";


//创建Four类对象
$four = new Four();
$four->fun1();
$four->fun2();

//创建Five类对象
$five = new Five();
$five->fun1();
$five->fun2();
$five->fun3();
$five->fun4();







