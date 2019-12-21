<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyContact extends Model
{
    protected $table = "company_contacts";
    protected $fillable = ['name','address','website','email','created_at','updated_at'];
}
