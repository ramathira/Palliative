<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patient_master';
    protected $fillable = ['first_name','second_name','dob','gender','phone_no','aadhar','status','enteredby'];
    public function address()
    {
        return $this->hasMany(PatientAddress::class, 'patient_id');
    }
    public function locations()
    {
        return $this->hasOne(PatientLocation::class, 'patient_id','id')->where('status', 1);
    }
    public function subCentres()
{
    return $this->hasManyThrough(SubCentre::class, PatientLocation::class, 'patient_id', 'id', 'id', 'subcentre_id');
}
}
