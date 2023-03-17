<?php

class Project extends Controller{
    use Model;
    use Helper;
    protected $table = 'project';

    
    public function index(){
        $data= $this->getProgects();
        $this->view('Project/project',$data);
     }
     public function getEditProject($id){
        $project['projectId'] = $id;
        $result = $this->where($project);
        print_r($result);
        $this->view('Project/editProject');
     }
     public function postEditProject($id){
        $data['title']='final';
        $this->update($id,$data,'projectId');
     }
      public function getNewProject(){
        $this->view('Project/newProject');
      }
      public function postNewProject(){
        $data['title']='final testing';
        $data['description']='damini';
        $data['imageName']='damini is happy';
        $this->insert($data);
        $this->view('Project/newProject');
      }
      public function deleteProject($id){
        $project['projectId'] = $id;
        $result = $this->delete($project,'projectId');
        $this->view('Project/project');
      }
      public function getProgects(){
        $query = [];
        $query['getAllBlogs'] = "select * from birdsong.project;";
       return $result = $this->executeCustomQuery($query);
     }
}