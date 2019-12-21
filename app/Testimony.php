<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $table = "testimonies";
    protected $fillable = ['company','image','quote','name','position','created_at','updated_at'];
}
