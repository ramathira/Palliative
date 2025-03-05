<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientPastTreatmentCategory extends Model
{
    protected $table = 'patient_past_treatments';
    protected $fillable = ['patient_id','treatment_category_id','status','enteredby'];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function treatment_type()
    {
        return $this->belongsTo(TreatmentTypes::class, 'treatment_category_id');
    }
}
