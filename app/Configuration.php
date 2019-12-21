<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = "configurations";
    protected $fillable = ['key','value','created_at','updated_at'];
}
