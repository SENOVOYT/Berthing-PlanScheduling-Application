<?php
namespace App;
use PHPUnit\Framework\TestCase;
class U2vessel_Test extends TestCase  {
    //properties
    public function test_add_vessel_with_an_valid_data(){

    //update every time you run it becuase you will have a duplicte if you run it two times
        $object = new vessel();
        $arry1=array("Ship_ID", "Ship_Name", "Departure_Location", "Vessel_Size", "Vessel_Type");
        $arry2=array("11", "ARIES", "CHINA", "50 METERS", "BULK FERTILIZER");
        $result=$object->add_vessel("ship_table",$arry1,$arry2);
        $this->assertEquals(true,$result);
    
    }
    public function test_add_vessel_with_an_invalid_data(){

   
        $object = new vessel();
        $arry1=array("Ship_ID", "Ship_Name", "Departure_Location", "Vessel_Size", "Vessel_Type","VESSEL");
        $arry2=array("10", "ARIES", "CHINA", "50 METERS", "BULK FERTILIZER");
        $result=$object->add_vessel("ship_table",$arry1,$arry2);
        $this->assertEquals(true,$result);
        
    
    }
    public function test_add_vessel_with_empty_data(){

   
        $object = new vessel();
        $arry1=array("");
        $arry2=array("");
        $result=$object->add_vessel("",$arry1,$arry2);
        $this->assertEquals(true,$result);
        
    
    }
    public function test_Get_vessel_with_valid(){

   
        $object = new vessel();
        $object2 = new DB_connection();
       
        $arry1=array("Ship_ID", "Ship_Name", "Departure_Location" , "Vessel_Size" , "Vessel_Type");
        
        $con=" Ship_ID = 1";
        
        $result=$object->Get_vessel("ship_table",$arry1,$con);
        $result1=$object2->select("ship_table",$arry1,$con);
        $expect = ReportGenerator::filter($result1);
        $this->assertEquals($expect,$result);
        
    
    }public function test_Get_vessel_with_an_invalid(){

   
        $object = new vessel();
        $object2 = new DB_connection();
       
        $arry1=array("Ship_ID", "Ship_Name", "Departure_Location" , "Vessel_Size" , "Vessel_Type");
        
        $con=" Ship_ID = 1";
        
        $result=$object->Get_vessel("ship_table",$arry1,$con);
        $arry1=array("Ship_ID", "Ship_Name", "Departure_Location" , "Vessel_Siz");
        $result=$object2 -> select("ship_table",$arry1,$con);
        $expect = ReportGenerator::filter($result);
        $this->assertEquals($expect,$result);
        
    
    }
    
    
}