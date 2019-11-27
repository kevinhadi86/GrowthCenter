<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = "team_members";
    protected $fillable = ['name','image','description','position','created_at','updated_at'];
}
