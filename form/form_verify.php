<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程（runoob.com）</title>
    <style>
        .error {
            color: #ff0000;
        }
    </style>
</head>
<body>
<?php

$nameErr = $emailErr = $genderErr = $websiteErr = '';
$name = $email = $gender = $comment = $website = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "名字是必须的";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-z]*$/", $name)) {
            $nameErr = "只允许字母和空格";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "邮箱是必须的";
    } else {
        $email = test_input($_POST["email"]);
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $emailErr = "非法邮箱格式";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "邮箱是必须的";
    } else {

    }
}

function test_input($data)
{
    $data = trim($data);    // delete front and behind space
    $data = stripslashes($data);    // delete slashes
    $data = htmlspecialchars($data);    // transform '<' and '>'
    return $data;
}

?>
</body>
</html>