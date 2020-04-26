<?php
require_once( dirname( __FILE__ ) . '/includes/connectionClass.php' );
 
class imageClass extends connectionClass{
    
    public function addImages($data){
        $this->set_charset('utf8');
        $data["image_data"]=$this->real_escape_string($data["image_data"]);
        $keys=array_keys($data);
        $values=array_values($data);
        date_default_timezone_set ("Asia/Kolkata");
        $query='INSERT INTO krackpotbrandimages ('.implode(', ', $keys).') VALUES ("'.implode('","', $values).'")';
        $result=  $this->query($query) or die($this->error);
        if($result){
            return "1";
        }
        else
        {
            return "2";
        }
    }
    
    /* public function listImages($limit,$page,$query){
        $this->set_charset('utf8');
            if($limit=="" && $page==""){
            $list="select * from krackpotbrandimages $query";
        }
        else
        {
            if($page==""){$page=1;}
            $start=$page - 1;
            $perpage=$start * $limit;
            $list="select * from $table $query Limit $perpage,$limit";
        }
        date_default_timezone_set ("Asia/Kolkata");
        $result=  $this->query($list);
        $count=  $result->num_rows;
        if($count < 1){}else{
            while($row= $result->fetch_array(1)){
                $arr[]= $row;
            }
            return $arr;
        }
    } */
}