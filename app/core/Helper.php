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
    print_r($countfiles);
    for($i=0;$i<$countfiles;$i++){
      $filename = $files['file']['name'][$i];
      print_r( $filename);
      ## Location
      $path = UPLOAD."/";
      $location = $path.$filename;
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

  function homepagequeries($query){
    $result =[];
    $result = $this-> customQuery($query);
    return $result;
  }

  function uploadSingleFile($files){
    $uploaddir =  UPLOAD."/";
    $uploadfile = $uploaddir . $files['content-file']['name'];

    // echo '<pre>';
    if (move_uploaded_file($files['content-file']['tmp_name'], $uploadfile)) {
        echo "Success.\n";
    } else {
        echo "Failure.\n";
    }

    // echo 'Here is some more debugging info:';
    // print_r($_FILES);
    // print "</pre>";
  }
}