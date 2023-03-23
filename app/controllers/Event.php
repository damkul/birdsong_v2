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
          $event['eventId'] = $id;
          $result = $this->where($event);
          print_r($result[0]);
          $this->view('Event/editEvent',$result);
       }
       public function postEditEvent(){
          $event['eventId'] = $_POST['eventId'];
           $this->update($event['eventId'],$_POST,'eventId');
           $result = $this->where($event);
          $this->view('Event/editEvent',$result);
       }
        public function getNewEvent(){
          $this->view('Event/newEvent');
        }
        public function postNewEvent(){
          print_r($_POST);
          $data['eventName']=$_POST['eventName'];
          $data['eventFee']=$_POST['eventFee'];
          $data['eventType']=$_POST['eventType'];
          $data['fromDate']=$_POST['fromDate'];
          $data['toDate']=$_POST['toDate'];
          $data['eventDescription']=$_POST['eventDescription'];
          $data['eventInstruction']=$_POST['eventInstruction'];
          $data['googleFormLink']=$_POST['googleFormLink'];
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
        public function eventDetails($id){
          $event['eventId'] = $id;
          $result = $this->where( $event);
          $this->view('Event/eventDetails',$result);
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
