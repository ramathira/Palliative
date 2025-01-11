<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientDisease extends Model
{
    protected $table = 'patient_disease';
    protected $fillable = ['patient_id','diagnosis','diagnosed_date','prior_condition','treating_hospital','doctor_name','hospital_type','allopathy','allopathy_details','ayurveda','ayurveda_details','homeopathy','homeopathy_details','present_health_condition','treatment_type_id','status','enteredby'];
}
