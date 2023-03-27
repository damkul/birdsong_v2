<?php
trait Model {
    use Database;

    protected $limit = 10;
    protected $offset = 0;

    public function findAll(){
        $query = "select * from $this->table limit $this->limit offset $this->offset";
        return $this->query($query,$data);
    }
    
    public function where($data,$data_not=[]){
        $keys = array_keys($data);
        $keys_not = array_keys($data);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
		if (count($keys) ==1) {
 			$query .=$key . " = :". $key;
                	break;
            }
           else {
               $query .=$key . " = :". $key . " && ";
            }
        }
        foreach ($keys_not as $key) {
	if (count($keys_not) >1) {
				$query .=$key . " = :". $key . " && ";
		}
            
        }
	  if(count($keys) !=1){
		 $query =trim($query," && ");
	}
        $query .=" limit $this->limit offset $this->offset";
        $data = array_merge($data,$data_not);
        return $this->query($query,$data);
    }
    
    public function first($data,$data_not=[]){
        $keys = array_keys($data);
        $keys_not = array_keys($data);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .=$key . " = :". $key . " && ";
        }
        foreach ($keys_not as $key) {
            $query .=$key . " = :". $key . " && ";
        }
        $query =trim($query," && ");
        $query .=" limit $this->limit offset $this->offset";
        $data = array_merge($data,$data_not);
        $result = $this->query($query,$data);
        if($result)
            return $result[0];
         return false;   
    }
    
    public function insert($data){
        $keys = array_keys($data);
        $query = "insert into $this->table (".implode(",",$keys).") values (:".implode(",:",$keys).") ";
        $result = $this->query($query,$data);
        return $result;
    }
    
    public function update($id,$data,$id_column='id'){
        $keys = array_keys($data);
        $query = "update $this->table set ";

        foreach ($keys as $key) {
            $query .=$key . " = :". $key . " , ";
        }
        $query =trim($query," , ");
        $query .=" where $id_column = :$id_column ";
        $data[$id_column] =$id;
         $this->query($query,$data);
         return false;
    }
    public function delete($id,$id_column='id'){
        $data[$id_column] = $id;
        $query = "delete from $this->table where $id_column = :$id_column ";
        $this->query($query,$data);
        return false;
    }
    public function customQuery($query){
         $result = $this->query($query);
         return $result;
    }
    public function customInsert($result=[],$tableName){
        $queries = [];
        for ($i=0; $i < count((array)$result) ; $i++) { 
            $keys = array_keys((array)$result[$i]);
            $query = "insert into $tableName (".implode(",",$keys).") values (:".implode(",:",$keys).") ";
            $data['query'] = $query;
            $data['values'] = $result[$i];
            array_push($queries,$data);
        }
        for ($i=0; $i < count($queries) ; $i++) { 
            $this->query($queries[$i]['query'],$queries[$i]['values']);
        }
        $result = [];
    }
}