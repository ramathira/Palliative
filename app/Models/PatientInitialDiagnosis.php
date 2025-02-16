<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientInitialDiagnosis extends Model
{
    protected $table = 'patient_intial_diagnosis';
    protected $fillable = ['patient_id','diagnosis','details_from_disease','undertanding_abt_disease','family_abt_disease','ward_member_aware','volunteer_type','volunteer','status','enteredby'];
}
