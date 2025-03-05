<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientClassification extends Model
{
    protected $table = 'patient_classify';
    protected $fillable = ['patient_id','patient_type','enteredby','status'];
}
