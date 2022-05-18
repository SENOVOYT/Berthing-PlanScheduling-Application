<?php
namespace App;
use PHPUnit\Framework\TestCase;
class U4Delay_Test extends TestCase  {
    public function test_Track_delay(){
        $obj= new Delays();
        $result=$obj->Track_delay("1");
        $this->assertEquals("15",$result);
    }
    public function test_Track_delay_with_missing(){
        $obj= new Delays();
        $result=$obj->Track_delay("");
        $this->assertEquals("15",$result);
    }
    public function test_Track_delay_with_an_invalid_data(){
        $obj= new Delays();
        $result=$obj->Track_delay("qwewwwedd");
        $this->assertEquals("15",$result);
    }
    public function test_Track_delay_with_an_empty_id_delay(){
        $obj= new Delays();
        $result=$obj->Track_delay("");
        $this->assertEquals("15",$result);
    }
    public function test_Track_delay_with_an_delay_of_0(){
        $obj= new Delays();
        $result=$obj->Track_delay("1");
        sleep(0);
        $this->assertEquals("15",$result);
    }
    

    

    

   
}