<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreatmentTypes extends Model
{
    protected $table = 'mt_treatment_type';
    protected $fillable = [
        'treatment_type' 
    ];
}
