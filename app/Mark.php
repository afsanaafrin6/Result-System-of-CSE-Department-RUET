<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
     protected $table = 'marks'; 
     protected $fillable = [
        'code','semester','section','course1','boardviva','exam','ct','attendmark','totalmarks',
    ];
}
