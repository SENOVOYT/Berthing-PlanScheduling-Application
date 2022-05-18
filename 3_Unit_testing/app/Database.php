<?php

namespace App;

class Database{
    //properties 
   

    private $sname= "localhost";
    private $unmae= "root";
    private $password = "";
    private $db_name = "bethsql";
    private $loction_time_zone='America/Belize';
    private $connection = "";
    private $PDO_ = "";
    private $status="";
    

    
    //methods

    //contructor for our DB_connection CLass
    //inizilize the connection for it to be used
    public function __construct(){

        $sname_= $this->sname;
        $unmae_= $this->unmae;
        $password_ = $this->password;
        $db_name_ = $this->db_name;

        date_default_timezone_set($this->loction_time_zone);

        $this->PDO_ = new \PDO("mysql:host=$sname_;dbname=$db_name_", $unmae_, $password_);

        $this->connection ;
        if( $conn = mysqli_connect($sname_, $unmae_, $password_,$db_name_)){
            $this->connection = $conn;
            $this->status = "true";
        }
        else{
            $this->status = "false";
        }

    }
    //get the connection to the database to execute query
    public function getConnection(){
        
        return $this->connection;
    }
     //get the connection in PDO manner to the database to execute creation of table, Databases etc.. from the system
    public function get_PDO_connection(){
        
        return $this->PDO_;

    }
    //updates the server name if needed by administrator
    public function update_sname( string $value ){
       
       $this->sname = $value;
       
        return "Updated";

    }
    //updates the username that acsess the database if needed by administrator
    public function update_unmae( string $value ){
       
        $this->unmae = $value;
        
         return "Updated";
 
    }
     //updates the password that acsess the database if needed by administrator
    public function update_password( string $value ){
       
        $this->password = $value;
        
         return "Updated";
 
    }
      //updates the database name if needed by administrator
    public function update_db_name( string $value ){
       
        $this->db_name = $value;
        
         return "Updated";
 
    }
      //updates the loction time zone name if needed by administrator
    public function update_loction_time_zone( string $value ){
       
        $this->loction_time_zone = $value;
        
         return "Updated";
 
    }
    //return true or false depending if it got a connection to the database was sucessful to the database
    public function is_connected(){
        
        return $this->status;
    }
    //destruct for our DB_connection CLass
    public function __destruct(){

     
     

        return "Destroy connection";
        
    }




}

?>