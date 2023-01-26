<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ctmark extends Model
{
     protected $table = 'ctmarks'; 
     protected $fillable = [
        'code','semester','section','course1','ct1','ct2','ct3','ct4','average',
    ];
}
