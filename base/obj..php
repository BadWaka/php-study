<?php
/**
 * Created by PhpStorm.
 * User: wangkai37
 * Date: 2017/9/20
 * Time: 下午8:36
 */

class Site
{
    var $url;
    var $title;

    function __construct($par1, $par2)
    {
        $this->url = $par1;
        $this->title = $par2;
    }

    function setUrl($par)
    {
        $this->url = $par;
    }

    function getUrl()
    {
        echo $this->url . PHP_EOL;
    }

    function setTitle($par)
    {
        $this->title = $par;
    }

    function getTitle()
    {
        echo $this->title . PHP_EOL;
    }
}

$runoob = new Site();
$taobao = new Site;
$google = new Site;

//// 调用成员函数，设置标题和URL
//$runoob->setTitle("菜鸟教程");
//$taobao->setTitle("淘宝");
//$google->setTitle("Google 搜索");
//
//$runoob->setUrl('www.runoob.com');
//$taobao->setUrl('www.taobao.com');
//$google->setUrl('www.google.com');

$runoob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();
