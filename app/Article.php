<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = ['title','content','image','author','created_at','updated_at'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
