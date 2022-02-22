<?php

class DashboardController extends framework {

   public function index(){
      if($lx="as"){
         $this->view("dashboard");
      }else{
         $this->view("menu");
      }
     
   }

   public function MailDegistir(){
      $this->view("dashboard",array("key"=>"maildegistir.php"));
    }

}



?>