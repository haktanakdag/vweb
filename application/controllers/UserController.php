<?php

class UserController extends framework {


    public function __construct(){

        if($this->getSession('userId')){
            $this->redirect("profile");
        }
        $this->helper("link");
        $this->UserModel = $this->model('UserModel');
        
    }

    public function index(){
        $data = [

            'values'=> "asdddddddddddddddddd",
            'hede'=> "fafafaf"
           ];

        $this->view("User",$data);
    }

    public function GetUsers(){
        $data = [

            'ad'=> "haktan",
            'soyad'=> "akdag"
           ];

        $this->view("User",$data);
    }
 

   

}


?>