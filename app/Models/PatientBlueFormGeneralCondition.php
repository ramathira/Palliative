<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientBlueFormGeneralCondition extends Model
{
    protected $table = 'patient_blue_form_general_condition';
    protected $fillable = ['patient_id','present_condition','feeding_method','sleep','bowel','colostomy','bladder_habit','enteredby','status'];
}
