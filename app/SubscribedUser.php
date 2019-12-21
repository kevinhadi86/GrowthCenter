<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscribedUser extends Model
{
    protected $table = "subscribed_users";
    protected $fillable = ['email','created_at','updated_at'];
}
