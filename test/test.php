<html>
<body>

<?php
// 获得请求路径
$request = $_SERVER['REQUEST_URI'];
echo $request;
echo "<br>";
echo parse_url($request, PHP_URL_PATH);
echo getcwd();
?>

</body>
</html>

