<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $table = "solutions";
    protected $fillable = ['image','solution','name','position','created_at','updated_at'];
    
    public function question(){
        return $this->belongsTo('App\Question');
    }
}
