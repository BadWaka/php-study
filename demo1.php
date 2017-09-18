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
$x = 5;

function myTest()
{
    global $x;
    $y = 10;
    echo '<p>测试函数内变量</p>';
    echo "变量 x 为: $x";
    echo '<br>';
    echo "变量 y 为: $y";
    echo "全局变量 $GLOBALS";
}

myTest();

echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
echo "变量 y 为: $y";
?>

</body>
</html>