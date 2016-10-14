<?php
// execute with : php -S 127.0.0.1:8080 /your/full/path/routing.php

$resource = __DIR__. $_SERVER['REQUEST_URI'];
$resource = rtrim(explode('?', $resource)[0], '/');
if (file_exists($resource)) {
    if (is_dir($resource)) {
        if (!file_exists($resource. '/index.php')) return false;
        require_once $resource. '/index.php';
    }
    else {
        return false;
    }
}
else {
    require_once __DIR__. '/index.php';
}
