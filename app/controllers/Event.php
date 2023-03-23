<?php

class Event extends Controller
{
    use Model;
    use Helper;
    protected $table = 'event';

    public function index(){
          $data = $this->getEventData();
          $this->view('Event/event',$data);
       }
       public function getEditEvent($id){
          $blog['blogId'] = $id;
          $result = $this->where($blog);
          print_r($result[0]);
          $this->view('Event/editEvent',$result);
       }
       public function postEditEvent($id){
          $blog['blogId'] = $id;
          print_r($_POST);
           $result = $this->update($id,$_POST,'blogId');
          $this->view('Event/editEvent',$result);
       }
        public function getNewEvent(){
          $this->view('Event/newEvent');
        }
        public function postNewEvent(){
          print_r($_POST);
          $data['blogName']=$_POST[blogName];
          $data['blogAuthor']=$_POST[blogAuthor];
          $data['blogContent']=$_POST[blogContent];
          $this->insert($data);
          $this->view('Event/newEvent');
        }
        public function getRegister(){
          $this->view('Event/newEvent');
        }
        public function postRegister(){
          print_r($_POST);
          $data['blogName']=$_POST[blogName];
          $data['blogAuthor']=$_POST[blogAuthor];
          $data['blogContent']=$_POST[blogContent];
          $this->insert($data);
          $this->view('Event/newEvent');
        }
        public function deleteEvent($id){
          $blog['blogId'] = $id;
          $result = $this->delete($blog,'blogId');
          $this->view('Event/blog');
        }
        public function readEvent($id){
          $blog['blogId'] = $id;
          $result = $this->where($blog);
          $this->view('Event/readEvent',$result);
        }
      public function getEventData(){
          $query = [];
          $upcomingEvents = [];
          $previouslyDoneEvents = [];
          $res = [];
          $query['getAllBlogs'] = "SELECT * from birdsong.event;";
          $result = $this->executeCustomQuery($query);

          forEach($result as $key) {

            if ($key->toDate >= date("Y-m-d H:i:s")) {
              array_push($upcomingEvents,$key);
            } else {
              array_push($previouslyDoneEvents,$key);
            }
        }
         $res['upcomingEvents'] = $upcomingEvents;
         $res['previouslyDoneEvents'] = $previouslyDoneEvents;
         return $res;
       }
}
