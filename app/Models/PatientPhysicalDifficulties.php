<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientPhysicalDifficulties extends Model
{
    protected $table = 'patient_monthly_assessment_physical_difficulty';
    protected $fillable = ['patient_id','visit_id','enteredby','physical_difficulty','duration','period'];
    public function enteredBy()
    {
        return $this->belongsTo(User::class, 'enteredby');
    }
}
