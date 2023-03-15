<?php

class Sponsership {
    use Model;
    protected $table = 'sponsership';

    
    public function index(){
        // call all model functions from here
      //  $blog = new Sponsership;
     //   $result =  $model->delete(80,'blogId');// actual id and name of id column from table
     //$arr['blogName'] = 'testing complete flow';
        //$blog->insert($arr);
        //$result =  $model->update(81,$arr,'blogId');// actual id and name of id column from table
        //$this->view('home');
     }
     public function getEditSponsership($id){
        $Sponsership['advId'] = $id;
        $result = $this->where($Sponsership);
        print_r($result);
       // $this->view('editSponsership');
     }
     //Final method
     // public function postEditSponsership($id,$data){
     //    $blog['blogId'] = $id;
     //    $this->update($id,$data,'blogId');
     // }
     //test method
     public function postEditSponsership($id){
        $data['advName']='final';
        $this->update($id,$data,'advId');
     }
      public function getNewSponsership(){
        $this->view('newSponsership');
      }
      public function postNewSponsership(){
        $data['advName']='final testing';
        $data['websiteLink']='damini';
        $data['imageName']='damini is happy';
        $this->insert($data);
        //$this->view('newSponsership');
      }
      public function deleteSponsership($id){
        $Sponsership['advId'] = $id;
        $result = $this->delete($Sponsership,'advId');
       // $this->view('Sponsership');
      }
}