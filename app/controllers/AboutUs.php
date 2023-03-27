<?php

class AboutUs extends Controller
{
   use Model;
   use Helper;
   public function index(){
      $this->view('AboutUs/aboutUs');
   }
 
}