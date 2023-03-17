<?php

class Membership extends Controller{
    use Model;
    protected $table = 'membership';

    public function index(){
      // TODO: Add code to get all blogs
        $data['blogName'] = 'blo1';
        $this->view('Membership/membership',$data);
     }
     public function getEditMembership($id){
        $blog['blogId'] = $id;
        $result = $this->where($blog);
        print_r($result[0]);
        $this->view('Membership/editMembership',$result);
     }
     public function postEditMembership($id){
        $blog['blogId'] = $id;
        print_r($_POST);
         $result = $this->update($id,$_POST,'blogId');
        $this->view('Membership/editMembership',$result);
     }
      public function getNewMembership(){
        $this->view('Membership/newMembership');
      }
      public function postNewMembership(){
        print_r($_POST);
        $data['blogName']=$_POST[blogName];
        $data['blogAuthor']=$_POST[blogAuthor];
        $data['blogContent']=$_POST[blogContent];
        $this->insert($data);
        $this->view('Membership/newMembership');
      }
      public function deleteMembership($id){
        $blog['blogId'] = $id;
        $result = $this->delete($blog,'blogId');
        $this->view('Membership/blog');
      }
      public function readMembership($id){
        $blog['blogId'] = $id;
        $result = $this->where($blog);
        $this->view('Membership/readMembership',$result);
      }
}