<?php
require_once __DIR__ . '/vendor/autoload.php';
use PHPSocketIO\SocketIO;
use Workerman\Worker;

// 创建socket.io服务端，监听3120端口
$io = new SocketIO(3120);
$io->on('connection', function ($socket) use ($io) {
    $socket->on('start', function () use ($io) {
        $io->emit('luck');
    });
    $socket->on('reload', function () use ($io) {
        $io->emit('reload');
    });
});

$io->on('workerStart', function()use($io) {
    $inner_http_worker = new Worker('http://0.0.0.0:9191');
    $inner_http_worker->onMessage = function($http_connection,$data)use($io){
        // if(!isset($_GET['msg'])) {
        //     return $http_connection->send('fail, $_GET["msg"] not found');
        // }else
        if ($_GET['type']=='num') {
            $io->emit('num',@$data);
            $http_connection->send('ok');
        }elseif ($_GET['type']=='json'){
            $io->emit('json',@$data);
            $http_connection->send('ok');
        }
    };
    $inner_http_worker->listen();
});

if(!defined('GLOBAL_START'))
{
    Worker::runAll();
}
