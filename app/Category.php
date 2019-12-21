<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['name','created_at','updated_at'];

    public function articles(){
        return $this->hasMany('App\Article');
    }

    public function questions(){
        return $this->hasMany('App\Question');
    }
}
