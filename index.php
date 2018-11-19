<?php
require 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>模拟应聘大赛现场抽奖</title>
    <link rel="stylesheet" href="./dist/css/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/flat-ui.min.css">
</head>
<body>
<div class="container">
    <h4 class="text-center">模拟应聘大赛现场抽奖</h4>
    <form action="status.php" method="POST">
        <div id="sid" class="form-group">
            <label for="class">学号</label>
            <input type="text" name="stdid" id="stdid" class="form-control" placeholder="J17001"
                   aria-describedby="helpId">
        </div>
        <div id="xm" class="form-group">
            <label for="name">姓名</label>
            <input type="text" name="name" id="name" class="form-control" onblur="isName(this.value)" placeholder="张三 "
                   aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary btn-block">我要报名</button>
    </form>
</div>
<script src="./dist/js/vendor/jquery.min.js"></script>
<script src="./dist/js/vendor/video.js"></script>
<script src="./dist/js/flat-ui.js"></script>
<script src="./js/app.js"></script>
</body>
</html>