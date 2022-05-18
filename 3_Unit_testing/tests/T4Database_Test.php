<?php
namespace App;
use PHPUnit\Framework\TestCase;
class U4Database_Test extends TestCase  {
    //properties
    private $sname= "localhost";
    private $unmae= "root";
    private $password = "";
    private $db_name = "bethsql";
    private $PDO_ = "";
    
    public function test_is_connected(){
        $result= new Database();
        $result= $result->is_connected();
        
        // $expected=mysqli_connect($this->sname,$this->unmae,$this->password,$this->db_name);
        $this->assertEquals("true",$result);
        
    }
    public function test_get_PDO_connection(){
        $this->PDO_ = new \PDO("mysql:host=$this->sname;dbname=$this->db_name", $this->unmae, $this->password);
        $result= new Database();
        $result= $result->get_PDO_connection();
        $this->assertEquals($this->PDO_,$result);
        
    }
}