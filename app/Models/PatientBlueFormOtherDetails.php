<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientBlueFormOtherDetails extends Model
{
    protected $table = 'patient_blue_form_other_details';
    protected $fillable = ['patient_id','mental_constraint','low_mood','depression','anxiety','phychiatric_disorder','memory_loss','mental_constraint_details','social_constraint','social_exclusion','family_not_Care','no_support_sytem','social_constraints_detail','rehabilitation_service','thing_from_homecare','enteredby','status'];

}
