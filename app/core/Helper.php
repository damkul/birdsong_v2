<?php

trait Helper{
    use Model;
    
    function executeCustomQuery($query = [],$data = []){
      $result =[];
      foreach ($query as $key ) {
        $result = $this-> customQuery($key);
      };
     return $result;
  }

  function fileUpload($fieldName,$files){
    $countfiles = count($files['file']['name']);
    for($i=0;$i<$countfiles;$i++){
      $filename = $files['file']['name'][$i];

      ## Location
      $location = "E:/downloads/uploads/".$filename;
      $extension = pathinfo($location,PATHINFO_EXTENSION);
      $extension = strtolower($extension);

      ## File upload allowed extensions
      $valid_extensions = array("jpg","jpeg","png","pdf","docx","mp3","mp4");

      $response = 0;
      ## Check file extension
      if(in_array(strtolower($extension), $valid_extensions)) {
           ## Upload file
           move_uploaded_file($files['file']['tmp_name'][$i],$location);
      }

 }
    // $target_dir = "E:/downloads/uploads/";
    // $target_file = $target_dir . basename($_FILES[$fieldName]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // $check = getimagesize($_FILES[$fieldName]["tmp_name"]);
    // move_uploaded_file($_FILES[$fieldName]["tmp_name"], $target_file);
  }
}