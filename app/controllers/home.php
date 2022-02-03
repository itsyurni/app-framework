<?php
namespace app\controllers; 
use yurni\framework\Http\Request;
use yurni\framework\Http\Response;
use yurni\framework\Controller;

class home extends Controller{
    
    public function index(){

        self::$view->render("home.html",[
            "title" => "Contact Page"
        ]); 
        

    }


}