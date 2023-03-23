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
        $this->view('Sponsership/editSponsership',$result);
     }
     public function postEditSponsership(){
        $sponsership['advId'] = $_POST['advId'];
        $this->update($sponsership['advId'],$_POST,'advId');
        $result = $this->where($sponsership);
        $this->view('Sponsership/editSponsership',$result);
     }
      public function getNewSponsership(){
        $this->view('Sponsership/newSponsership');
      }
      public function postNewSponsership(){
       
        $data['advName']=$_POST['advName'];
        $data['websiteLink']=$_POST['websiteLink'];
        $data['fromDate']=$_POST['fromDate'];
        $data['toDate']=$_POST['toDate'];
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