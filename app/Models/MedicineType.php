<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineType extends Model
{
    protected $table = 'mt_medicine_type';
    protected $fillable = ['medicine_type','short_code'];
}
