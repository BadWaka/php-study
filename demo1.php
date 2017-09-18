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

$txt1 = "学习 PHP";
$txt2 = "RUNOOB.COM";
$cars = array("Volvo", "BMW", "Toyota");

//echo $txt1;
//echo "<br>";
//echo "在 $txt2 学习 PHP ";
//echo "<br>";
//echo "我车的品牌是 {$cars[0]}";

print $txt1;
print "<br>";
print "在 $txt2 学习 PHP";
print "<br>";
print "我车的品牌是 {$cars[0]}";

?>

</body>
</html>