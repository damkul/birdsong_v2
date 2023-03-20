<?php

class Sponsership extends Controller{
    use Model;
    use Helper;
    protected $table = 'sponsership';

    
    public function index(){
      $data = $this-> getSponserships();
        $this->view('Sponsership/sponsership',$data);
     }
     public function getEditSponsership($id){
        $Sponsership['advId'] = $id;
        $result = $this->where($Sponsership);
        print_r($result);
        $this->view('Sponsership/editSponsership');
     }
     public function postEditSponsership($id){
      // TODO: get data from $_POST and pass 
        $data['advName']='final';
        $this->update($id,$data,'advId');
     }
      public function getNewSponsership(){
        $this->view('Sponsership/newSponsership');
      }
      public function postNewSponsership(){
        // TODO: get data from $_POST and pass 
        $data['advName']='final testing';
        $data['websiteLink']='damini';
        $data['imageName']='damini is happy';
        $this->insert($data);
        $this->view('Sponsership/newSponsership');
      }
      public function deleteSponsership($id){
        $Sponsership['advId'] = $id;
        $result = $this->delete($Sponsership,'advId');
        $this->view('Sponsership/sponsership');
      }
      public function getSponserships(){
        $query = [];
        $query['getAllBlogs'] = "SELECT * FROM birdsong.sponsership where toDate >= CURDATE();";
       $result = $this->executeCustomQuery($query);
       return $result;
     }
}