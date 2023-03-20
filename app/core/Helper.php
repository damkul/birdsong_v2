<?php

trait Helper{
    use Model;
    
    function executeCustomQuery($query = []){
      $result =[];
      foreach ($query as $key ) {
        $result = $this-> customQuery($key);
      };
     return $result;
  }
}