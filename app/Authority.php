<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    public $timestamps=false;
    protected $fillable=['employee_id','name','email'];
}
