<?php
require 'config.php';

$data = $database->select('user', [
    'username',
    'class',
]);

$jsonData = json_encode($data, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>模拟应聘大赛抽奖</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">模拟应聘大赛现场抽奖</h1>

    <h2 id="stdid" style="margin-top: 18%" class="text-center">等待开奖</h2>
    <h2 id="username" class="text-center"></h2>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/vendor/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/vendor/video.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/flat-ui.js"></script>
<script src="./js/app.js"></script>
<script src='https://cdn.bootcss.com/socket.io/2.0.3/socket.io.js'></script>
<script>
    var jsonData = JSON.parse('<?php echo $jsonData ?>');
    var len = jsonData.length;
    var runsta;
    var sta = new Boolean(1);
    $(document).keydown(function (e) {
        //键盘监听，空格开始/停止
        if (e.keyCode == 32) {
            if (sta == 1) {
                runsta = setInterval("luck(jsonData, len)", 30);
                sta = 0;
            } else {
                clearInterval(runsta);
                sta = 1;
            }
        }
    })
    var socket = io('http://127.0.0.1:3120');
    // 当连接服务端成功时触发connect默认事件
    socket.on('connect', function(){
    console.log('connect success');
    });
    socket.on('luck', function(){
        if (sta == 1) {
            runsta = setInterval("luck(jsonData, len)", 30);
            sta = 0;
        } else {
            clearInterval(runsta);
            sta = 1;
        }
    });
</script>
</body>
</html>