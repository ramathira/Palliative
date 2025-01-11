<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientMedication extends Model
{
    protected $table = 'patient_medication';
    protected $fillable = ['patient_id','medication','medicine_type','dose','frequency','period','duration','timespan','route','status','enteredby'];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function medicine_details()
    {
        return $this->belongsTo(Medicine::class, 'medication');
    }
    public function medication_type()
    {
        return $this->belongsTo(MedicineType::class, 'medicine_type');
    }
    public function medicine_mode()
    {
        return $this->belongsTo(MedicineMode::class, 'route');
    }
}
