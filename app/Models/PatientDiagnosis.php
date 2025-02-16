<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientDiagnosis extends Model
{
    protected $table = 'patient_diagnosis';
    protected $fillable = ['patient_id','diagnosis_id','enteredby','status'];
    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class, 'diagnosis_id','id');
    }
}
