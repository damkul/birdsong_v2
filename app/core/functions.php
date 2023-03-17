<?php

trait Helper{
    use Model;
    function executeCustomQuery($query = []){
        $result = [];
        $cnt = 0;
        foreach ($query as $key) {
           $res = $this->customQuery($key);
           $temp = [];
           $temp[$cnt] = $res;
           array_push($result,$temp);
           $cnt++;
        }
        return $result;
     }
}
