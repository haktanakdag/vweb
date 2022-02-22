<?php

class DashboardController extends framework {

   public function index(){
     
         $this->view("dashboard");
      
     
   }

   
   public function ChangeMail(){
      $this->view("dashboard",array("key"=>""));
    }
    
   public function ChangePassword(){
      $this->view("dashboard",array("key"=>""));
    }
   public function User(){
      $this->view("dashboard",array("key"=>"User.php"));
    }
    public function Profile(){
      $this->view("dashboard",array("key"=>"profile"));
    }

}



?>