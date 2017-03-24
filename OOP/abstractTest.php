<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/24
 * Time: 14:25
 *
 * 描述：抽象类例子
 *
 */

header("content-type:text/html;charset=utf-8");

abstract class Person{

//    属性
    protected $name;
    protected $country;

//    构造方法 ，如果权限为public，则子类会自动调用，如果权限为protected，必须在子类的构造方法中继承父类的构造方法
    protected function __construct($name="",$country="china")
    {
        $this->name = $name;
        $this->country=$country;
    }

//抽象方法   c
    abstract function say();
    abstract function eat();

//    非抽象方法
    function run(){
        echo "使用两条腿走路<br>";
    }

}

class ChineseMan extends Person{
//    因为父级抽象类的构造方法为protected权限，所以在子类中需要重写构造方法继承父级构造方法
    function __construct($name, $country)
    {
        parent::__construct($name, $country);
    }

    function say()
     {
         // TODO: Implement say() method.
         echo $this->name." 是 ".$this->country."人，说中文<br>";
     }
    function eat()
    {
        // TODO: Implement eat() method.
        echo $this->name." 是 ".$this->country."人，吃中餐，使用筷子<br>";
    }
}

class Americans extends Person{
    function  __construct($name, $country)
    {
        parent::__construct($name, $country);
    }

    function say()
    {
        // TODO: Implement say() method.
        echo $this->name." 是 ".$this->country."人，说英文<br>";
    }
    function eat()
    {
        // TODO: Implement eat() method.
        echo $this->name." 是 ".$this->country."人，吃西餐，使用刀叉<br>";
    }
}

class GuangDong extends ChineseMan{

}

//不能实例化抽象类
//$person = new Person();

//实例化子类对象
$chineseMan = new ChineseMan("cyb","中国");
$chineseMan->eat();
$chineseMan->say();
$chineseMan->run();

$Americans = new Americans("jone","美国");
$Americans->eat();
$Americans->say();
$Americans->run();

$guangDong = new GuangDong("hehe","广东");
$guangDong->eat();


















