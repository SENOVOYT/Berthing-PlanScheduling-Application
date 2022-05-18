<?php
namespace App;
use PHPUnit\Framework\TestCase;
class U3voyage_Test extends TestCase  {
    public function test_Update_voyage_with_an_valid_data(){
        $obj = new voyage();
        $aryy=array( "Shipping_Agents_Agent_ID", "ID_Status");
        $aryy1=array( "3", "3");
        $con=" ID_Voyage = 1 ";
        $result=$obj->Update_voyage("voyage_table",$aryy,$aryy1,$con);
        $this->assertEquals("true",$result);
        
    
    }
    public function test_Update_voyage_with_an_invalid_data(){
        $obj = new voyage();
        $aryy=array( "Shipping_Agents_Agent_ID", "ID_Status");
        $aryy1=array( "1000", "3");
        $con=" ID_Voyage = 1 ";
        $result=$obj->Update_voyage("voyage_table",$aryy,$aryy1,$con);
        $this->assertEquals("true",$result);
        
    
    }
    public function test_Update_voyage_with_empty_data(){
        $obj = new voyage();
        $aryy=array("");
        $aryy1=array("");
        $con="";
        $result=$obj->Update_voyage("",$aryy,$aryy1,$con);
        $this->assertEquals("true",$result);
        
    
    }
    public function test_SendNotifications_with_valid_date(){
        $html_out="<div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                the worker made a change to the schedule. MADE BY worker </div>";
        $obj= new NotificationManger();
        $run=$obj->SendNotifications_to_display_in_html();
        $this->assertEquals($html_out,$run);

    }
    //notification sender only sends the notification and create it and check if there is a record of change it doesnt equire a input therefore you are unable to input invald data
    public function test_SendNotifications_with_invalid_date(){
        $html_out="<div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                the worker made a change to the schedule. MADE BY worker </div>";
        $obj= new NotificationManger();
        $run=$obj->SendNotifications_to_display_in_html();
        $this->assertEquals($html_out,$run);

    }
   
}