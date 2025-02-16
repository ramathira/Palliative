<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiseaseCondition extends Model
{
    protected $table = 'mt_patient_disease_conditions';
    protected $fillable = ['disease_condition'];
}
