<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public $timestamps=false;
    protected $fillable=['userId','device_serial_no','employee_id','type'];
}
