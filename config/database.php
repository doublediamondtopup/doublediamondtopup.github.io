<?php
class Databases{  
  public $con;  
  public function __construct(){  
   $this->con = mysqli_connect("localhost", "epdcoqbh_smm", "Sagar12345#", "epdcoqbh_smm");  
   if(!$this->con){  
    echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
  }  
}  
public function select($table_name){  
 $array = array();  
 $query = "SELECT * FROM ".$table_name."";  
 $result = mysqli_query($this->con, $query);  
 while($row = mysqli_fetch_assoc($result)){  
  $array[] = $row;  
}  
return $array;  
}  
public function select_where($table_name, $where_condition){  
 $condition = '';  
 $array = array();  
 foreach($where_condition as $key => $value){  
  $condition .= $key . " = '".$value."' AND ";  
}  
$condition = substr($condition, 0, -5);  
$query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
$result = mysqli_query($this->con, $query);  
while($row = mysqli_fetch_assoc($result)){  
  $array[] = $row;  
}  
return $array;  
}  
} 
?>  