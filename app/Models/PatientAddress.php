<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientAddress extends Model
{
    protected $table = 'patients_address';
    protected $fillable = ['patient_id','house_no','address','landmark','status'];
}
