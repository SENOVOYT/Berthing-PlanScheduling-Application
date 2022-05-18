<?php

namespace App;

require_once "DB_connection.php";


class Delays{
    //properties 
   private $object;


    //methods

    //contructor for our DB_connection CLass
    public function __construct(){
      $this->object = new DB_connection();
    }
    public function add_delay($table_name,$clom,$vaules){

   
        $result= $this->object->create($table_name,$clom,$vaules);
     
        return $result;
    

    }
    public function Get_delay($table_name,$array_colm_names,$condition){

        
        $result= $this->object->Select($table_name, $array_colm_names, $condition);
        $result=ReportGenerator::filter($result);
        return $result;
        

    }
    public function Track_delay($id_delay_to_track){
        if(!empty($id_delay_to_track)){
        $con=" ID_Delays = $id_delay_to_track";
        $array_colm_names=array("Delay_Start_Time", "Delay_End_Time");
        $result= $this->object->select("delays_table", $array_colm_names, $con);
        $result=ReportGenerator::filter($result);
        $str=$result["Delay_Start_Time"];
        $str2=$result["Delay_End_Time"];
        $d1 = new \DateTime("$str");
        $d2 = new \DateTime("$str2");
        $interval = $d1->diff($d2);

        $diffInSeconds = $interval->s; //45
        $diffInMinutes = $interval->i; //23
        $diffInHours   = $interval->h; //8
        $diffInDays    = $interval->d; //21
        $diffInMonths  = $interval->m; //4
        $diffInYears   = $interval->y; //1
        if($diffInYears!=0){
            return $diffInYears;
        }elseif($diffInMonths!=0){
            return $diffInMonths;
        }elseif($diffInDays!=0){
            return $diffInDays;
        }elseif($diffInHours!=0){
            return $diffInHours;
        }elseif($diffInMinutes!=0){
            return $diffInMinutes;
        }elseif($diffInSeconds!=0){
            return $diffInSeconds;
        }else{
            return "FALSE";
        }
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