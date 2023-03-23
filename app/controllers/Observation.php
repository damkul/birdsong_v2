<?php

class Observation extends Controller {
    use Model;
    use Helper;
    protected $table = 'observation';

    public function index(){
      $data = $this->getObservations();
        $this->view('Observation/observation',$data);
     }
     public function getEditObservation($id){
        $obs['obsId'] = $id;
        $result = $this->where($obs);
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
        $this->view('Observation/newObservation');
      }
      public function postNewObservation(){
        print_r($_POST);
        $data['birdName']=$_POST['birdName'];
        $data['scientificName']=$_POST['scientificName'];
        $data['marathiName']=$_POST['marathiName'];
        $data['dateOfObs']=$_POST['dateOfObs'];
        $data['description']=$_POST['description'];
        $this->insert($data);
        $this->view('Observation/newObservation');
      }
      public function deleteObservation($id){
        $obs['obsId'] = $id;
        $result = $this->delete($blog,'blogId');
        $this->view('Observation/blog');
      }
      public function readObservation($id){
        $obs['obsId'] = $id;
        $result = $this->where($blog);
        $this->view('Observation/observationDetail',$result);
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
}