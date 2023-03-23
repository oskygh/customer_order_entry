<?php

use app\bare\Application;


require_once __DIR__ . './../vendor/autoload.php';

$app = new Application();

$app->router->get('/',function (){
    return "Hello World";
});

$app->router->get('/orders',function (){
    return "Orders";
});

$app->run();