<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
//echo "Hello World!";
//$x = 5;
//$y = 6;
//$z = $x + $y;
//echo $z;
//$txt='Hello World!';
//echo $txt;
//$x = 5;
//
//function myTest()
//{
//    global $x;
//    $y = 10;
//    echo '<p>测试函数内变量</p>';
//    echo "变量 x 为: $x";
//    echo '<br>';
//    echo "变量 y 为: $y";
//    echo "全局变量 $GLOBALS";
//}
//
//myTest();
//
//echo "<p>测试函数外变量:<p>";
//echo "变量 x 为: $x";
//echo "<br>";
//echo "变量 y 为: $y";

//function myTest()
//{
//    static $x = 0;
//    echo $x;
//    $x++;
//}
//
//myTest();
//myTest();
//myTest();

//function myTest($x)
//{
//    echo $x;
//}
//
//myTest(5);

//$x = 5;
//echo "<h2>PHP 很有趣!</h2>";
//echo "Hello world!<br>";
//echo "我要学 PHP!<br>";
//echo "这是一个", $x, "字符串，", "使用了", "多个", "参数。";

//$txt1 = "学习 PHP";
//$txt2 = "RUNOOB.COM";
//$cars = array("Volvo", "BMW", "Toyota");
//
////echo $txt1;
////echo "<br>";
////echo "在 $txt2 学习 PHP ";
////echo "<br>";
////echo "我车的品牌是 {$cars[0]}";
//
//print $txt1;
//print "<br>";
//print "在 $txt2 学习 PHP";
//print "<br>";
//print "我车的品牌是 {$cars[0]}";

//$x = "Hello World!";
//echo $x;
//echo "<br>";
//$x = 'Hello world!';
//echo $x;

//$x = 5985;
//var_dump($x);
//echo "<br>";
//$x = -345;
//var_dump($x);
//echo "<br>";
//$x = 0x8C;
//var_dump($x);
//echo "<br>";
//$x = 047;
//var_dump($x);

//$x = 10.365;
//var_dump($x);
//echo "<br>";
//$x = 2.4e3;
//var_dump($x);
//echo "<br>";
//$x = 8E-5;
//var_dump($x);

//$x = true;
//$y = false;

//$cars = array("Volvo", "BMW", "Toyota");
//var_dump($cars);

//class Car
//{
//    var $color;
//
//    function __construct($color = "green")
//    {
//        $this->color = $color;
//    }
//
//    function what_color()
//    {
//        return $this->color;
//    }
//}
//
//function print_vars($obj)
//{
//    foreach (get_object_vars($obj) as $prop => $val) {
//        echo "\t$prop = $val\n";
//    }
//}
//
//$herbie = new Car("white");
//
//echo "\herbie:Properties\n";
//print_vars($herbie);

//$x = "Hello World!";
//$x = null;
//var_dump($x);

//// 区分大小写的常量
//define("GREETING", "欢迎访问 Runoob.com");
//echo GREETING;
//echo '<br>';
//echo greeting;

//// 不区分大小写的常量
//define("GREETING", "欢迎访问 Runoob.com", true);
////echo greeting;
//
//function myTest()
//{
//    echo GREETING;


//}
//
//myTest();

//echo "__DIR__", __DIR__;

//$txt = "Hello world!";
//echo $txt;

//$txt1 = "Hello world!";
//$txt2 = "What a nice day!";
//echo $txt1 . " " . $txt2;

//echo strlen("Hello world!");

//echo strpos("Hello world!", "world");

//$x = 10;
//$y = 6;
//echo($x + $y);
//echo '<br>';
//
//echo ($x - $y); // 输出4
//echo '<br>';  // 换行
//
//echo ($x * $y); // 输出60
//echo '<br>';  // 换行
//
//echo ($x / $y); // 输出1.6666666666667
//echo '<br>';  // 换行
//
//echo ($x % $y); // 输出4
//echo '<br>';  // 换行
//
//echo -$x;

var_dump(intdiv(10, 3));
echo intdiv(10, 3);

?>

</body>
</html>