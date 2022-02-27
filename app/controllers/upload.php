<?php
namespace app\controllers; 
use yurni\framework\Http\Request;
use yurni\framework\Http\Response;
use yurni\framework\Controller;


class upload extends Controller{
    public function before(){
        return false;
    }

    public function index(Request $req){

        if($req->isPost()){
            $photo = $req->file('photo');
            // cek ada upload photo atau tidak
            if($photo) {
                // set nama baru dengan ekstensi sesuai dengan file yg terupload
                //$photo->name = 'newname';
        
                try {
                    $photo->move('storage/');
                } catch (\Exception $e) {
                    echo "okgg";
                }
            } 
        }

        echo '<form method="post" action="/upload"  enctype="multipart/form-data">
		<input type="file" name="photo">
		<input type="submit" value="Go !" />
	    </form>';

    }
    
    public function multiple(Request $req){
        if($req->isPost()){
             $images = $req->multiFiles('photo');
            foreach($images as $i => $image) {
                //$image->name = 'image-'.($i+1);
                $image->move('storage/');
            } 
        }
        echo '<form method="post" action="/upload/multiple"  enctype="multipart/form-data">
		<input type="file" name="photo[]" multiple>
		<input type="submit" value="Go !" />
	    </form>';

    }

}