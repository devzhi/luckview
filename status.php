<?php
require 'config.php';
require 'push.php';
//接收POST数据
$name = $_POST["name"];
$class = strtoupper($_POST["class"]);
//验证是否已报名,如果未报名则添加到数据库中

if (!$database->has("user", [
    "AND" => [
        "username" => $name,
        "class" => $class,
    ],
])) {
    $database->insert('user', [
        'username' => $name,
        'class' => $class,
    ]);
    $status =  $name."，报名成功";
    $data = $database->count('user');
    Push('num',$data);
}else {
    $status =  $name."，请不要重复报名";
}
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>模拟应聘大赛现场抽奖</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css">
</head>

<body>
<div class="container">
    <div class="card text-center">
        <img class="card-img-top" src="./img/sdcet.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title"><?echo $status; ?></h4>
            <p class="card-text">报名成功，请等待开奖。</p>
            <p class="card-text">欢迎关注<b>山东电子职业技术学院招办</b>微信公众号</p>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/vendor/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/vendor/video.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/flat-ui.js"></script>
<script src="./js/app.js"></script>
<script>
    jQuery(document).ready(function () {
        setTimeout('Follow()', 2000);
    });
</script>
</body>

</html>