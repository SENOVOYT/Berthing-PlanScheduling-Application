<?php

namespace App;

use LDAP\Result;

require_once "DB_connection.php";


class NotificationManger{
    //properties 
   private $object;


    //methods

    //contructor for our DB_connection CLass
    public function __construct(){
      $this->object = new DB_connection();
    }
    public function SendNotifications_to_display_in_html(){
        $condition="";
        $array_colm_names=array("ID_Notification", "Notification_Message", "Changes_Made", "ID_Changes");
        $val=$this->object->Select("notification", $array_colm_names, $condition); 
        if(mysqli_num_rows($val)){
            $html_out="";
            while($result=ReportGenerator::filter($val))
            {
                $out1=$result["Notification_Message"];
                $out2=$result["Changes_Made"];

                $html_out.="<div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                $out1 MADE BY $out2 </div>";
            }
            //this is where you would have print the code to the screen but since we are testing we will instead return than echoing it
            return $html_out;

        }else{
            return "False";
        }


        
        

    }
    public function GetNotification($table_name,$array_colm_names,$condition){

        $result= $this->object->Select($table_name, $array_colm_names, $condition);
        $result=ReportGenerator::filter($result);
        return $result;
        
    }
    
    public function addNotification($table_name,$clom,$vaules){
        $result= $this->object->create($table_name,$clom,$vaules);
        return $result;

        
    }
    public function __destruct(){

        return "This is the end of the class";
        
    }




}

   


// var_dump($object)

?>