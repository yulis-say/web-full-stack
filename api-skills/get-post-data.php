<?php

// 在本文件所在目录，启动一个 Web 服务器：
// php -S localhost:8080

// 模拟 GET / POST 接口
echo json_encode([
    'text' => '这是对 fetch() 进行封装后的 '. $_SERVER['REQUEST_METHOD'] .' 请求。',
]);
