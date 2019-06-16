# LuckView



电子学院2018年模拟应聘大赛现场抽奖程序


（大一入学时所做的项目，后来也被学校多个大型活动所使用，但这个并不是最终版本，最终版本当时没有上传Github后来便丢失了，现将现有版本开源，留作纪念）


## 环境需求

- PHP >= 5.4
- MySQL >= 5.5
- Composer

## 快速开始

1. 克隆这个项目

2. 导入`db.sql`到你的MySQL数据库

3. 执行`composer install`

4. 配置`config.php`中的数据库设置

5. 修改`control.html、luck.php`中的websocket服务器地址

## 致谢

为本项目所依赖的以下伟大项目致谢：

- [designmodo/Flat-UI](https://github.com/designmodo/Flat-UI)
- [catfan/Medoo](https://github.com/catfan/Medoo)
- [walkor/phpsocket.io](https://github.com/walkor/phpsocket.io)
- [zdhxiong/mdui](https://github.com/zdhxiong/mdui)

## LICENSE

Copyright 2018 Hiyelang

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
