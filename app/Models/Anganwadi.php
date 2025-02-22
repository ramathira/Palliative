<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anganwadi extends Model
{
    protected $table = 'mt_anganwadi';
    protected $fillable = ['id','awc_name','subcentre_id'];
    public $timestamps = false;
    public function subcentre()
    {
        return $this->belongsTo(SubCentre::class,'subcentre_id');
    }
    public function anganwadi_worker()
    {
        return $this->belongsTo(AWC_Worker::class,'awc_id','id');
    }
}
