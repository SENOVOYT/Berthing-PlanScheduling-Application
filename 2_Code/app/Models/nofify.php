<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nofify extends Model
{
    use HasFactory;
    
    protected $table = 'vessels';

    protected $primaryKey = 'id';

    protected $fillable =['Vessel','voyage_number','ETA','ETD','ATA','ATD',
    'pilot_name','operation_supervisor','gang_foreman','stevedore_gang',
    'crane_operator','Head_operator','histacker_operator','Machines_needed','finish'];
}
