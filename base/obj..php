<?php
///////**
////// * Created by PhpStorm.
////// * User: wangkai37
////// * Date: 2017/9/20
////// * Time: 下午8:36
////// */
//////
//////
////////$a = new Site('a', 'b');
//////
////////$runoob = new Site();
////////$taobao = new Site;
////////$google = new Site;
//////
////////// 调用成员函数，设置标题和URL
//////////$runoob->setTitle("菜鸟教程");
//////////$taobao->setTitle("淘宝");
//////////$google->setTitle("Google 搜索");
//////////
//////////$runoob->setUrl('www.runoob.com');
//////////$taobao->setUrl('www.taobao.com');
//////////$google->setUrl('www.google.com');
////////
////////$runoob = new Site('www.runoob.com', '菜鸟教程');
////////$taobao = new Site('www.taobao.com', '淘宝');
////////$google = new Site('www.google.com', 'Google 搜索');
////////
////////// 调用成员函数，获取标题和URL
////////$runoob->getTitle();
////////$taobao->getTitle();
////////$google->getTitle();
////////
////////$runoob->getUrl();
////////$taobao->getUrl();
////////$google->getUrl();
//////
//////
//////class Site
//////{
//////    var $url;
//////    var $title;
//////
//////    function __construct($par1, $par2)
//////    {
//////        $this->url = $par1;
//////        $this->title = $par2;
//////        echo "构造" . $par1 . $par2;
//////    }
//////
//////    function __destruct()
//////    {
//////        // TODO: Implement __destruct() method.
//////        print "销毁" . $this->title . "\n";
//////    }
//////
//////    function setUrl($par)
//////    {
//////        $this->url = $par;
//////    }
//////
//////    function getUrl()
//////    {
//////        echo $this->url . PHP_EOL;
//////    }
//////
//////    function setTitle($par)
//////    {
//////        $this->title = $par;
//////    }
//////
//////    function getTitle()
//////    {
//////        echo $this->title . PHP_EOL;
//////    }
//////}
//////
//////class Child_Site extends Site{
//////    var $category;
//////
//////    function setCate($par){
//////        $this->category = $par;
//////    }
//////
//////    function getCate(){
//////        echo $this->category . PHP_EOL;
//////    }
//////}
////
////class MyClass
////{
////    public $public = 'public';
////    protected $protected = 'Protected';
////    private $private = 'Private';
////
////    function printHello()
////    {
////        echo $this->public;
////        echo $this->protected;
////        echo $this->private;
////    }
////}
////
////$obj = new MyClass();
////echo $obj->public;
//////echo $obj->protected;
//////echo $obj->private;
////$obj->printHello();
////
////class MyClass2 extends MyClass
////{
////    protected $protected = 'Protected2';
////
////    function printHello()
////    {
////        echo $this->public;
////        echo $this->protected;
////        echo $this->private;
////    }
////}
////
////$obj2 = new MyClass2();
////echo $obj2->public; // 这行能被正常执行
////echo $obj2->private; // 未定义 private
////echo $obj2->protected; // 这行会产生一个致命错误
////$obj2->printHello(); // 输出 Public、Protected2 和 Undefined
//
//
//class MyClass
//{
//    // 声明一个公有的构造函数
//    public function __construct()
//    {
//    }
//
//    // 声明一个公有的方法
//    public function MyPublic()
//    {
//    }
//
//    // 声明一个受保护的方法
//    protected function MyProtected()
//    {
//    }
//
//    // 声明一个私有的方法
//    private function MyPrivate()
//    {
//    }
//
//    // 此方法为公有
//    function Foo()
//    {
//        $this->MyPublic();
//        $this->MyProtected();
//        $this->MyPrivate();
//    }
//}

interface iTemplate
{
    public function setVariable($name, $var);

    public function getHtml($template);
}

class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        // TODO: Implement setVariable() method.
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        // TODO: Implement getHtml() method.
        foreach ($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
        return $template;
    }
}