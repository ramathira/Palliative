<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientAddress extends Model
{
    protected $table = 'patients_address';
    protected $fillable = ['patient_id','house_no','address','landmark','status','enteredby'];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
