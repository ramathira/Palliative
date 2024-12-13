<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AWC_Worker extends Model
{
    protected $table = 'mt_anganwadi_workers';
    protected $fillable = ['awc_worker_name','awc_id','phone_no','status'];
    public function awc()
    {
        return $this->belongsTo(Anganwadi::class,'awc_id');
    }
}
