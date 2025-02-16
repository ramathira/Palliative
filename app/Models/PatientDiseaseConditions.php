<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientDiseaseConditions extends Model
{
    protected $table = 'patient_disease_conditions';
    protected $fillable = ['patient_id','disease_condition','status','enteredby'];
}
