<?php

namespace App;

require_once "DB_connection.php";


class ReportGenerator{
    //properties 
   private $object;


    //methods

    //contructor for our DB_connection CLass
    public function __construct(){
      $this->object = new DB_connection();
    }
    public function reportGeneratorfilter(){


        $table_name="report_table";
        $condition="Report_ID = 1";
        $array_colm_names= array("Report_ID", "ID_Voyage", "ID_Changes");
        $val=$this->object->Select($table_name, $array_colm_names, $condition); 
        $val=$this->filter($val);
        return $val;
        

    }
    public function reportGeneratorobject(){

        $table_name="report_table";
        $condition="Report_ID = 1";
        $array_colm_names= array("Report_ID", "ID_Voyage", "ID_Changes");
        return $this->object->Select($table_name, $array_colm_names, $condition); 
        

    }
    static public function filter($value){
        if(!empty($value)){
        $resul=mysqli_fetch_assoc($value);
        return $resul;
    }else{
        return "false";
    }

        
    }
    public function __destruct(){

        return "This is the end of the class";
        
    }




}

   


// var_dump($object)

?>