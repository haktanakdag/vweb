<?php

class welcomeController extends framework {

   public function index(){
       if(1==1){
        $this->redirect("DashboardController/index");
       }else{
       $this->redirect("AuthController/loginForm");
       }
   }

}



?>