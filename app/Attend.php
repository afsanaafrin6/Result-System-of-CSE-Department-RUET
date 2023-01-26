<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attend extends Model
{
    protected $table = 'attends'; 
     protected $fillable = [
        'code','semester','section','course1','cycle','day','date','attendance',
    ];
}
