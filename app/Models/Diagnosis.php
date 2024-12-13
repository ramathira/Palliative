<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $table = 'mt_diagnosis';
    protected $fillable = ['diagnosis'];
}
