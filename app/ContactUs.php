<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = "contact_us";
    protected $fillable = ['name','email','subject','message','created_at','updated_at'];
}
