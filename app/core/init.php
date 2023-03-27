<?php

spl_autoload_register(function($classname){
    $filename = "./app/models/".ucfirst($classname).".php";
    require $filename;
});

require 'config.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'Helper.php';
require 'Style.php';
require "App.php";
require './app/views/header.view.php';
// require './app/views/footer.view.php';
