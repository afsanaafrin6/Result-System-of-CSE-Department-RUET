<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachercourse extends Model
{
    protected $table = 'teachercourses'; 
     protected $fillable = [
        'field','code','semester','section','course1',
    ];
}
