<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientBlueFormDetailedExamination extends Model
{
    protected $table = 'patient_blue_form_detail_exam';
    protected $fillable = ['patient_id','systolic_bp','diastolic_bp','pulse_rate','oral_hygiene','skin_care','skin_integrity','pressure_sore','private_hygiene','enteredby','status'];
}
