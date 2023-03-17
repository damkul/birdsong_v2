<?php

class Observation extends Controller {
    use Model;
    use Helper;
    protected $table = 'oservation';

    public function index(){
      $data = $this->getObservations();
        $this->view('Observation/observation',$data);
     }
     public function getEditObservation($id){
        $blog['blogId'] = $id;
        $result = $this->where($blog);
        print_r($result[0]);
        $this->view('Observation/editObservation',$result);
     }
     public function postEditObservation($id){
        $blog['blogId'] = $id;
        print_r($_POST);
         $result = $this->update($id,$_POST,'blogId');
        $this->view('Observation/editObservation',$result);
     }
      public function getNewObservation(){
        $this->view('Observation/newObservation');
      }
      public function postNewObservation(){
        print_r($_POST);
        $data['blogName']=$_POST[blogName];
        $data['blogAuthor']=$_POST[blogAuthor];
        $data['blogContent']=$_POST[blogContent];
        $this->insert($data);
        $this->view('Observation/newObservation');
      }
      public function deleteObservation($id){
        $blog['blogId'] = $id;
        $result = $this->delete($blog,'blogId');
        $this->view('Observation/blog');
      }
      public function readObservation($id){
        $blog['blogId'] = $id;
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