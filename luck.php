<?php
require 'config.php';

$data = $database->select('user', [
    // 'id',
    'username',
    'stdid',
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
    <link rel="stylesheet" href="./dist/css/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/flat-ui.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">模拟应聘大赛现场抽奖</h1>

        <h2 id="stdid" style="margin-top: 18%" class="text-center">等待开奖</h2>
        <h2 id="username" class="text-center"></h2>

    </div>
    <script src="./dist/js/vendor/jquery.min.js"></script>
    <script src="./dist/js/vendor/video.js"></script>
    <script src="./dist/js/flat-ui.js"></script>
    <script src="./js/app.js"></script>
    <script>

        var jsonData = JSON.parse('<?php echo $jsonData ?>');
        var len = jsonData.length;
        
    $(document).keydown(function(e){
        if(e.keyCode==32){
        
        luck(jsonData,len);

        }
    })

    </script>
</body>
</html>