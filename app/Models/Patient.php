<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Patient extends Model
{
    protected $table = 'patient_master';
    protected $fillable = ['first_name','patient_code','second_name','dob','gender','phone_no','aadhar','status','enteredby'];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($patient) {
            // Fetch the last `patient_code`
            $lastCode = DB::table('patient_master')
                ->where('patient_code', 'LIKE', 'KAR-%')
                ->orderByRaw('CAST(SUBSTRING(patient_code, 5) AS UNSIGNED) DESC')
                ->value('patient_code');

            if ($lastCode) {
                // Extract the numeric part and increment it
                $lastNumber = (int) substr($lastCode, 4);
                $nextNumber = $lastNumber + 1;
            } else {
                // Start with 1 if no existing code
                $nextNumber = 1;
            }

            // Set the `patient_code` with the prefix
            $patient->patient_code = 'KAR-' . $nextNumber;
        });
    }
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
