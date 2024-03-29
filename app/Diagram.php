<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagram extends Model
{
    protected $table = "diagrams";
    protected $fillable = ['title','description','text_image','created_at','updated_at'];
}
