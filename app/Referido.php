<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referido extends Model
{
    //
     protected $table = 'referidos';
     protected $primaryKey = 'id';
     public $timestamps = true;
   
    
      protected $fillable = [
        'id_user', 'name','email','phone',
    ];
}
