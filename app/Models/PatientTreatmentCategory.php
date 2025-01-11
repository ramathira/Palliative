<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientTreatmentCategory extends Model
{
    protected $table = 'patient_treatment_category';
    protected $fillable = ['patient_id','treatment_category_id','status','enteredby'];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
