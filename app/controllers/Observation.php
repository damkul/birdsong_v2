<?php

class Observation extends Controller {
    use Model;
    use Helper;
    protected $table = 'observation';

    public function index(){
      $data = $this->getObservations();
      $data['birds'] = $this->getList();
        $this->view('Observation/observation',$data);
     }
     public function getEditObservation($id){
        $obs['obsId'] = $id;
        $result = $this->where($obs);
        $result['birds'] = $this->getList();
        $this->view('Observation/editObservation',$result);
     }
     public function postEditObservation(){
      $obs['obsId'] = $_POST['obsId'];
        print_r($_POST);
        $this->update($obs['obsId'],$_POST,'obsId');
        $result = $this->where($obs);
        $this->view('Observation/editObservation',$result);
     }
      public function getNewObservation(){
        $result['birds'] = $this->getList();
        $this->view('Observation/newObservation',$result);
      }
      public function postNewObservation(){
        print_r($_POST);
        $data['birdName']=$_POST['birdName'];
        $data['scientificName']=$_POST['scientificName'];
        $data['marathiName']=$_POST['marathiName'];
        $data['dateOfObs']=$_POST['dateOfObs'];
        $data['description']=$_POST['description'];
        $data['youtubeLink']=$_POST['youtubeLink'];
        $insertId = $this->insert($data);
        $this->insertFiles($insertId,$_FILES);
        $this->fileUpload("file",$_FILES);
        $this->getNewObservation();
      }
      public function deleteObservation($id){
        $blog='';
        $obs['obsId'] = $id;
        $result = $this->delete($blog,'blogId');
        $this->view('Observation/blog');
      }
      public function readObservation($id){
        $obs['obsId'] = $id;
        $obs['imageName']=$id;
        $result = $this->where($obs);
        $this->view('Observation/observationDetails',$result);
      }
      public function getObservations(){
        $query = [];
        $query['getAllBlogs'] = "SELECT obs.obsid,Min(img.imageId) imageId,img.imageName,Min(snd.soundId) soundId,snd.soundName,birdName,scientificName,marathiName,description,dateOfObs FROM 
        birdsong.observation obs
        left join images img on obs.obsId = img.obsId 
        left join sound snd on obs.obsId = snd.obsId
        group by img.obsId, snd.obsId;";
       return $result = $this->executeCustomQuery($query);
     }
     public function insertFiles($insertId,$files){
    
      $images = [];
      $sounds = [];
      $countfiles = count($files['file']['name']);
      for($i=0;$i<$countfiles;$i++){
        $fileName = $files['file']['name'][$i];
        $strings = explode(".", $fileName);
          if (in_array( "mp3", $strings )) {
          $soundTable = 'sound';
          $sound['soundName']= $fileName;
          $sound['obsId']=$insertId;
          array_push($sounds,$sound);
        } else {
          $imageTable = 'images';
          $data['imageName']= $fileName;
          $data['obsId']=$insertId;
          array_push($images,$data);
        }
      }
      if(!empty($images)){
        $this->customInsert($images,$imageTable);
      }
      if(!empty($sounds)){
        $this->customInsert($sounds,$soundTable);
      }
      $this->fileUpload('file',$files);
    }
    function getList(){
      $query = [];
        $query['getBirds'] = "SELECT * from birds";
       return $result = $this->executeCustomQuery($query);
    }
    
}