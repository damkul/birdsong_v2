<?php

class Home extends Controller
{
   use Model;
   use Helper;
   public function index(){
      $result = $this->getHomePageData();
      $this->view('home',$result);
   }
   public function getHomePageData(){
      $query = [];
      $query['getEvents'] = "select eventName,eventDescription from birdsong.event LIMIT 4;";
      $query['getObservations'] = "SELECT obs.obsid,Min(img.imageId) imageId,img.imageName,Min(snd.soundId) soundId,snd.soundName,birdName,scientificName,marathiName,description,dateOfObs FROM 
      birdsong.observation obs
      left join images img on obs.obsId = img.obsId 
      left join sound snd on obs.obsId = snd.obsId
      group by img.obsId, snd.obsId LIMIT 4;";
      $query['getBlogs'] = "select blogName,blogContent from birdsong.blog LIMIT 4;";
      $query['getProjects'] = "select title,description,imageName from birdsong.project LIMIT 4;";
      $query['getSponserships'] = "SELECT advName,imageName FROM birdsong.sponsership;";

      $counter = 0;
      $allData = [];
      foreach ($query as $key) {
         $result = $this->homepagequeries($key);
         // $allData[$counter] = $result;
         array_push($allData,$result);
      }
     return $allData;
   }
   
}