<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //Add One to many relationship 
    public function user(){
        return $this->belongsTo('App\User');
    }
}
