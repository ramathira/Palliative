<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientFamily extends Model
{
    protected $table = 'patient_family';
    protected $fillable = ['patient_id','family_member_name','dob','gender','patient_relation','staying','education','income','source_income','income_catogory','status','enteredby'];
}
