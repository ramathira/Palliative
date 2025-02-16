<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonthlySchedulePalliativeNurse extends Model
{
    protected $table = 'monthly_schedule_palliative_nurse';
    protected $fillable = ['plan_date','plan_time','patient_id','enteredby'];

    public function patient_details()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
