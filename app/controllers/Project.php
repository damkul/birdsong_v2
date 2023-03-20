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
        $res = [];
        $previousProjects = [];
        $ongoingProjects = [];
        $query['getAllProjects'] = "select * from project;";
        $result = $this->executeCustomQuery($query);
        if (count($result) > 1) {
          foreach ($result as $key) {
            print_r($key->toDate);
            if ($key->toDate >= date("Y-m-d H:i:s")) {
              array_push($ongoingProjects,$key);
            } else {
              array_push($previousProjects,$key);
            }
            
           }
        }
       // array_push($ongoingProjects,"ongoingProjects");
       // array_push($previousProjects,"previousProjects");
       $res['ongoingProjects'] = $ongoingProjects;
        $res['previousProjects'] = $previousProjects;
        return $res;
     }
}