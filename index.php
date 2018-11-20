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
    <form id="join" action="status.php" method="POST">
        <div id="sid" class="form-group">
            <label for="class">班级</label>
            <input type="text" name="class" id="class" class="form-control" placeholder="J17001"
                   aria-describedby="helpId">
        </div>
        <div id="xm" class="form-group">
            <label for="name">姓名</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="张三 "
                   aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary btn-block">我要报名</button>
    </form>
</div>
<script type="text/javascript" src="https://unpkg.com/validator.tool/dist/validator.min.js"></script>
<script src="./dist/js/vendor/jquery.min.js"></script>
<script src="./dist/js/vendor/video.js"></script>
<script src="./dist/js/flat-ui.js"></script>
<script src="./js/app.js"></script>
<script>
var v = new Validator('join',[
    {
        name: 'name',
        display:"请输入正确的姓名",
        rules: 'is_chinese|min_length(2)|max_length(5)'
    },{
        name:'class',
        display: "请输入正确的班级",
        rules: 'min_length(6)|max_length(6)'
    }
],function(obj,evt){
    if(obj.errors.length>0){
        console.log("验证失败");
    }else {
        console.log("通过验证");
    }
});
</script>
</body>
</html>