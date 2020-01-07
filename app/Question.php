<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $fillable = ['question','description','image','created_at','updated_at'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function solutions(){
        return $this->hasMany('App\Solution');
    }

    public function success_stories(){
        return $this->hasMany('App\SuccessStory');
    }
}
