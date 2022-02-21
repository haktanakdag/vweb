<?php

class DashboardController extends framework {

   public function index(){
      if($lx="as"){
         $this->view("dashboard");
      }else{
         $this->view("menu");
      }
     
   }


}



?>