<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientLocation extends Model
{
    protected $table = 'patient_location';
    protected $fillable = ['patient_id','subcentre_id','ward_id','ashaworker_id','awc','awc_worker_id','status','enteredby'];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id','id');
    }
    public function subcentre()
    {
        return $this->belongsTo(SubCentre::class, 'subcentre_id','id');
    }
    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id','id');
    }
    public function ashaworker()
    {
        return $this->belongsTo(AshaWorker::class, 'ashaworker_id','id');
    }
    public function anganwadi()
    {
        return $this->belongsTo(Anganwadi::class, 'awc','id');
    }
    public function anganwadi_worker()
    {
        return $this->belongsTo(AWC_Worker::class, 'awc_worker_id','id');
    }
  
}
