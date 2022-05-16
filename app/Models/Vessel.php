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



}
