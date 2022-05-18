<?php
namespace App;
use PHPUnit\Framework\TestCase;
class U1ReportGenerator_Test extends TestCase  {
    //properties
//test if  the reportGeneratorfilter_valid_filter_data returns true 
public function test_reportGeneratorfilter_valid_filter_data(){
    $obj= new ReportGenerator();
    
    $expect = array("Report_ID"=>"1", "ID_Voyage"=>"1", "ID_Changes"=>"500");

    $result=$obj->reportGeneratorfilter(); 
    $this->assertEquals($expect,$result);
}
//test if  the reportGeneratorfilter_invalid_filter_data returns error 
public function test_report_generatorfilter_invalid_filter_data(){
    $obj= new ReportGenerator();
    
    $expect = array("Report_ID"=>"2", "ID_Voyage"=>"1", "ID_Changes"=>"500");

    $result=$obj->reportGeneratorfilter(); 
    $this->assertEquals($expect,$result);

}
//test if report_generatorfilter_empty_filter_data
public function test_report_generatorfilter_empty_filter_data(){
    $obj= new ReportGenerator();
    
    $expect = array("Report_ID"=>"2", "ID_Voyage"=>"1", "ID_Changes"=>"500");

    $result=$obj->filter(""); 
    $this->assertEquals($expect,$result);  

}
public function test_report_generatorfilter_valid_filter_data_of_only_1_filter(){
    $obj= new DB_connection();
    $obj1= new ReportGenerator();
    $result=$obj->select("report_table",array("Report_ID")," Report_ID = 1 ");
    
    $expect = array("Report_ID"=>"1");

    $result=$obj1->filter($result);
    $this->assertEquals($expect,$result);
    
}
public function test_report_generatorfilter_valid_filter_data_of_max(){
    $obj= new DB_connection();
    $obj1= new ReportGenerator();
    $result=$obj->select("report_table",array("Report_ID","ID_Voyage","ID_Changes")," Report_ID = 1 ");
    
    $expect = array("Report_ID"=>"1","ID_Voyage"=>"1", "ID_Changes"=>"500");

    $result=$obj1->filter($result);
    $this->assertEquals($expect,$result);
    
}
}