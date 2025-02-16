<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JHI extends Model
{
    protected $table = 'mt_jhi';
    protected $fillable = ['jhi_name','status','enteredby'];

    
}
