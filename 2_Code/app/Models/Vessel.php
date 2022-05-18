<?php

namespace App\Models;
// written by: Driane PPerez
    // tested by: Driane Perez
    // debugged by: Driane Perez

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vessel extends Model
{
    use HasFactory;

    protected $table = 'vessels';

    protected $primaryKey = 'id';

    protected $fillable =['Vessel','voyage_number','ETA','ETD','ATA','ATD',
    'pilot_name','operation_supervisor','gang_foreman','stevedore_gang',
    'crane_operator','Head_operator','histacker_operator','Machines_needed','finish'];

         
            
            
           
      
         


}
