<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'mt_medicines';
    protected $fillable = ['medicine','enteredby'];
}
