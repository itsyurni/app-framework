<?php

use app\controllers\home;
use app\controllers\upload;
require __DIR__.'/../vendor/autoload.php';


use yurni\framework\Application;
use yurni\framework\Http\Request;
use yurni\framework\Http\Response;
use yurni\framework\db;

/**
 * Version V0.1 MVC
 * 
 * Develope Request File
 * Add Models Systems
 * Add Database Systems
 * Add Confing Systems using .env
*/



$app = new Application();

$app->get("/",[home::class,"index"]);  
$app->get("/db",function(){
    $db = db::instance();
    $db->insert("users",["email"=>"okgg"]);
});  
$app->get("/upload",[upload::class,"index"]);
$app->post("/upload",[upload::class,"index"]);
$app->get("/upload/multiple",[upload::class,"multiple"]);
$app->post("/upload/multiple",[upload::class,"multiple"]);


$app->run();

