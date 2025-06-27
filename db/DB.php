<?php

require_once __DIR__.'/DatabaseInterface.php';
class DB implements DatabaseInterface{
    private $con;
    private $table;
    private $sql;
    function __construct($table)
    {
        $this->table = $table;
        $this->con = new mysqli('localhost' , 'root' , '' , '87_oop');

    }
    public function InsertData($data){
        $columns = "";
        $values = "";
        foreach ($data as $key => $value) {
            $columns .= "`$key`,";
            $values .= "'$value',";
        }
        $columns =  trim($columns , ',');
        $values =  trim($values , ',');
        $this->sql = "INSERT INTO `$this->table` ($columns) VALUES($values)";
      
        return $this;
    }
    public function DeleteData($condition = ""){
        if ($condition == "") {
            $this->sql = "DELETE FROM `$this->table`";
        }else{
            $this->sql = "DELETE FROM `$this->table` WHERE $condition";
        }

       return $this;
    }
    public function ReadData($columns=[] , $condition=""){
        
        $result = [];
        $fields = "";
        if (count($columns) == 0) {
           $fields = "*";
        }else{
            foreach($columns as $value){
                $fields .= "`$value`,";
            }
        }

        $fields = trim($fields , ',');

        if ($condition == "") {
            $this->sql = "SELECT $fields FROM `$this->table`";
        }else{
            $this->sql = "SELECT $fields FROM `$this->table` WHERE $condition";
        }
             $res = $this->con->query($this->sql);
             while($raw = $res->fetch_assoc()){
            array_push($result , $raw);
        }
        return $result;
    }
    public function UpdateData($data , $condition=""){

        $payload = "";
        foreach ($data as $key => $value) {
            $payload .=  "`$key`='$value',";
        }
        $payload = trim($payload  , ",");
        
         if ($condition == "") {
            $this->sql = "UPDATE `$this->table` SET $payload";
        }else{
            $this->sql = "UPDATE `$this->table` SET $payload WHERE $condition";
        }
      return $this;
    }
    public function excute(){
        return $this->con->query($this->sql);

    }
}


$obj = new DB('tasks');

echo "<pre>";
var_dump($obj->InsertData([
"title" => "three",
"description" => "four",
'user_id' => 1
])->excute()
);
// $obj->excute();



?>