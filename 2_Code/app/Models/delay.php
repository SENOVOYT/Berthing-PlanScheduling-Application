<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delay extends Model
{
    use HasFactory;

    protected $table = 'delays';

    protected $primaryKey = 'id';

    protected $fillable =['Delay_start','Delay_end','finish','type'];
}

