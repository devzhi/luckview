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
});
Worker::runAll();
