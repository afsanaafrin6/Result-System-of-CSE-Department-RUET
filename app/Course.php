<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'courses'; 
     protected $fillable = [
        'code','semester','section','course1','course2','course3','course4','course5',
    ];
}
