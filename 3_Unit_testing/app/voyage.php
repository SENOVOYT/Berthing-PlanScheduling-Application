<?php

namespace App;

require_once "DB_connection.php";


class voyage{
    //properties 
   private $object;


    //methods

    //contructor for our DB_connection CLass
    public function __construct(){
      $this->object = new DB_connection();
    }
    public function add_voyage($table_name,$clom,$vaules){

   
        $result= $this->object->create($table_name,$clom,$vaules);
     
        return $result;
    

    }
    public function Get_voyage($table_name,$array_colm_names,$condition){

        
        $result= $this->object->Select($table_name, $array_colm_names, $condition);
        $result=ReportGenerator::filter($result);
        return $result;
        

    }
    public function Update_voyage($table_name,$array_colm_names,$Array_value,$condition){
        
        $result= $this->object->update($table_name, $array_colm_names, $Array_value, $condition);
        return $result;
    
    }
    public function __destruct(){

        return "This is the end of the class";
        
    }




}

   


// var_dump($object)

?>