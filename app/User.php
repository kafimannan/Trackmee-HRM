<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='users';
    protected $primaryKey='userId';
    public $timestamps=false;
    protected $fillable=['username','password','type','lastLogin'];
}
