<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    protected $table = "success_stories";
    protected $fillable = ['title','content','image','author','created_at','updated_at'];

    public function question(){
        return $this->belongsTo('App\Question');
    }
}
