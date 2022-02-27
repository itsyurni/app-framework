<?php
require __DIR__.'/../vendor/autoload.php';

use app\controllers\home;
use app\controllers\upload;
use yurni\framework\Application;
use yurni\framework\Http\Request;
use yurni\framework\Http\Response;
use yurni\framework\Model;

$app = new Application();

$app->setMiddleware("auth",function(Response $res)  {
    return true;
});

$app->get("/",function(){
    echo "Hello Yurni !";
})->auth();
$app->only(["get","post"],"/upload",[upload::class,"index"]);


$app->getRouter()->handle("404",function(Response $res){
    return $res->json(["error"=>404])->setStatusCode(404)->body;
});


$app->run();

