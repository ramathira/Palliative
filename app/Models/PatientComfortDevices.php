<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientComfortDevices extends Model
{
    protected $table = 'patient_comfort_devices';
    protected $fillable = ['patient_id','comfort_devices_id','enteredby','status'];
    public function comfort_devices()
    {
        return $this->belongsTo(ComfortDevices::class, 'comfort_devices_id','id');
    }
}
