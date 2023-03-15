<?php

class Project {
    use Model;
    protected $table = 'project';

    
    public function index(){
        // call all model functions from here
      //  $blog = new Project;
     //   $result =  $model->delete(80,'blogId');// actual id and name of id column from table
     //$arr['blogName'] = 'testing complete flow';
        //$blog->insert($arr);
        //$result =  $model->update(81,$arr,'blogId');// actual id and name of id column from table
        //$this->view('home');
     }
     public function getEditProject($id){
        $project['projectId'] = $id;
        $result = $this->where($project);
        print_r($result);
       // $this->view('editProject');
     }
     //Final method
     // public function postEditProject($id,$data){
     //    $blog['blogId'] = $id;
     //    $this->update($id,$data,'blogId');
     // }
     //test method
     public function postEditProject($id){
        $data['title']='final';
        $this->update($id,$data,'projectId');
     }
      public function getNewProject(){
        $this->view('newProject');
      }
      public function postNewProject(){
        $data['title']='final testing';
        $data['description']='damini';
        $data['imageName']='damini is happy';
        $this->insert($data);
        //$this->view('newProject');
      }
      public function deleteProject($id){
        $project['projectId'] = $id;
        $result = $this->delete($project,'projectId');
        $this->view('project');
      }
}