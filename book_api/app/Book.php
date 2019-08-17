<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function user(){
    	return $this->belongsto(User::class);
    }

    public function rating(){
    	return $this->hasMany(Rating::class);
    }
    
    protected $fillable = ['user_id', 'title', 'description'];
}
