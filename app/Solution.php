<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $table = "solutions";
    protected $fillable = ['image','solutions','created_at','updated_at'];
    
    public function question(){
        return $this->belongsTo('App\Question');
    }
}
