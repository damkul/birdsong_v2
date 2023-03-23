<?php
class Controller 
{
    public function view($name, $data = []){
        print_r($name);
        $filename= "./app/views/".$name.".view.php";
        if (!empty($data)) {;
            extract($data);
        }
        if (file_exists($filename)) {
            require $filename;
        } else {
            $filename= "./app/views/404.view.php";
            require $filename;
        }
    }
}
