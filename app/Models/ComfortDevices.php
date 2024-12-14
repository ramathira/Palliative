<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComfortDevices extends Model
{
    protected $table = 'mt_comfort_devices';
    protected $fillable = [
        'comfort_device_name' 
    ];
}
