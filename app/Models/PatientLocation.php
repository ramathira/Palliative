<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientLocation extends Model
{
    protected $table = 'patient_location';
    protected $fillable = ['patient_id','subcentre_id','ward_id','ashaworker_id','awc','awc_worker_id','status'];
}
