<?php

use app\controllers\home;
require __DIR__.'/../vendor/autoload.php';


use yurni\framework\Application;
use yurni\framework\Http\Request;
use yurni\framework\Http\Response;


/**
 * Version V0.1 MVC
 * 
 * Develope Request File
 * Add Models Systems
 * Add Database Systems
 * Add Confing Systems using .env
 * Add Errors Handle
*/

/*
	Create TODO using the MVC
*/


/**
 * Version V0.2 MVC
 *
 *
 * Add Middleware System
 * Add Migration System
 * Minimaze the Code
 * Develope Router File  
 * Add Route file
 * Develope More The Systems
 * Add MVC To Github & Composer Package list
 
*/


/*
	Create Blog Script
*/



$app = new Application();

$app->get("/",[home::class,"index"]);  

$app->get("/test",function(Request $req, Response $res){
    return '<form method="post" action="/multiple"  enctype="multipart/form-data">
		<input type="file" name="photo" multiple>
		<input type="submit" value="Go !" />
	</form>';

});

$app->post("/photo",function(Request $req, Response $res){

/* 	$photo = $req->file('photo');
    // cek ada upload photo atau tidak
    if($photo) {
        // set nama baru dengan ekstensi sesuai dengan file yg terupload
        $photo->name = 'newname';

        try {
            $photo->move('storage/');
        } catch (\Exception $e) {
            echo "okgg";
        }
    } */
});

$app->post("/multiple",function(Request $req, Response $res){
	if($req->hasFile("photso")){
		echo "okgg";
	}
/* 	  $images = $req->multiFiles('photo');
    	foreach($images as $i => $image) {
        $image->name = 'image-'.($i+1);
        $image->move('storage/');
    }  */

});


$app->run();

