<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCentre extends Model
{
    protected $table = 'mt_subcentres';
    protected $fillable = [
        'sub_centre' 
    ];

    // The relationship between Subcentre and Ward (One to Many)
    public function wards()
    {
        return $this->hasMany(Ward::class, 'subcentre', 'id');
    }
    public function patientLocations()
    {
        return $this->hasMany(PatientLocation::class, 'subcentre_id', 'id');
    }
}
