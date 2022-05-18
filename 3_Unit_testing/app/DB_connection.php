<?php

namespace App;
require_once "Database.php";



class DB_connection{

    //properties 
    private $connection = "";
    
    //methods

    //contructor for our DB_connection CLass
    public function __construct(){
        $object = new Database();
        $this->connection = $object->getConnection();
    }
    //  creates any record that is need by just passing the table name and colmn
    //craete a query example
//     $arry1=array("ID_Changes", "Deliver_To_Roles", "Change_Type", "Change_By");
// $array2=array(100, "3", "4", "5");
// $result= $object->create("changes",$arry1,$array2);
    public function create( $table_name, $array_colm_names, $Array_value){
        
        $arrayLength1 = count($array_colm_names);
        $arrayLength = count($Array_value);
        

        if ($arrayLength1 == $arrayLength && $arrayLength1 != 0 && $arrayLength!= 0 && !empty($table_name)){

        $ex = "INSERT INTO `$table_name` ( " ;

        $i = 0;
        while ($i < $arrayLength)
        {
            if($i==0){
                $ex.="`";
                $ex.= $array_colm_names[$i];
                $ex.="`";
                
            }else{

                $ex.= ', ';
                $ex.="`";
                $ex.= $array_colm_names[$i];
                $ex.="`";
               
            }
            $i++;
            
        }
        $ex.=") VALUES ( ";
        

        $i = 0;
        while ($i < $arrayLength)
        {
            if($i==0){
                $ex.= "'";
                $ex.= $Array_value[$i];
                $ex.= "'";
                
            }else{

                $ex.= ", '";
                $ex.= $Array_value[$i];
                $ex.= "'";
               
            }
            $i++;
            
        }
        $ex.=");";
        //return $ex;
        // $ex="INSERT INTO `changes` (`ID_Changes`, `Deliver_To_Roles`, `Change_Type`, `Change_By`) VALUES ('13', '15', '1', '1');";
        if(mysqli_query($this->connection, $ex))
        {
            return true;

        }else{
            return false;
        }


            
        }else{
            return false;
        }
        

    }

    // deletes a record or anything that is needed
    //example to use it
    //$result= $object->delete("changes","ID_Changes = 3 ");
    public function delete( $table, $condition){

        if( !empty($table)){
            if(!empty($condition)){
            $execute = "DELETE FROM `$table` WHERE $condition ;";
        } else {
            $execute = "DELETE FROM `$table`;";
            }
        if(mysqli_query($this->connection, $execute))
        {
            return "true";

        }else{
            return "false";
        }}else{
            return "false";
        }


    }
    //update the a record that is needed by passing the table name and the necessary attributes to execute the query 
    //UPDATE `changes` SET `ID_Changes`='[value-1]',`Deliver_To_Roles`='[value-2]',`Change_Type`='[value-3]',`Change_By`='[value-4]' WHERE 1
    public function update(string $table_name, $array_colm_names, $Array_value, $condition){
        $arrayLength1 = count($array_colm_names);
        $arrayLength = count($Array_value);

        if ($arrayLength1 == $arrayLength && $arrayLength1 != 0 && $arrayLength!= 0 && !empty($table_name)){
        $i = 0;
        $ex = "UPDATE `$table_name` SET ";
        while ($i < $arrayLength)
        {
            if($i==0){
                $ex.="`";
                $ex.= $array_colm_names[$i];
                $ex.="` = ";

                $ex.="'";
                $ex.= $Array_value[$i];
                $ex.="'";
                
            }else{

                $ex.= ', ';
                $ex.="`";
                $ex.= $array_colm_names[$i];
                $ex.="` = ";

                $ex.="'";
                $ex.= $Array_value[$i];
                $ex.="'";
               
            }
            $i++;
            
        }
        if(!empty($condition)){
        $ex.= "WHERE $condition ;";
        }else{
            $ex.= ";";
        }

        if(mysqli_query($this->connection, $ex))
        {
            return "true";

        }else{
            return "false";
        }

        }else{
            return "false";
        }   
    }
    //select the table record of any parameters that enter in the function
    //example to run the code
//     $arry1=array( "Deliver_To_Roles", "Change_Type", "Change_By");
// $array2=array( "3", "4", "5000");
// $result= $object->update("changes",$arry1,$array2," ID_Changes = 1 ");




// SELECT `ID_Changes`, `Deliver_To_Roles`, `Change_Type`, `Change_By` FROM `changes` WHERE 1
//$arry1=array( "Deliver_To_Roles", "Change_Type", "Change_By");
//$array2=array( "3", "4", "5000");
//$result= $object->Select("changes",$arry1,"");
    public function select(string $table_name, $array_colm_names, $condition){
        

        $arrayLength1 = count($array_colm_names);
        

        if ( $arrayLength1 != 0 && !empty($table_name)){
        $i = 0;
        $ex = "SELECT ";
        while ($i < $arrayLength1)
        {
            if($i==0){
                $ex.="`";
                $ex.= $array_colm_names[$i];
                $ex.="`";
               
            }else{

                $ex.= ', ';
                $ex.="`";
                $ex.= $array_colm_names[$i];
                $ex.="`";
               
            }
            $i++;
            
        }
        $ex.=" FROM `$table_name` ";
        if(!empty($condition)){
        $ex.= "WHERE $condition ;";
        }else{
            $ex.= ";";
        }

        if($QU=mysqli_query($this->connection, $ex))
        {
            return $QU;

        }else{
            return "false";
        }

        }else{
            return "false";
        }   

        
    }
    //destroys the connection of the database
    public function __destruct(){
        
        
        return "Destroy connection";
        
    }




}

   




?>