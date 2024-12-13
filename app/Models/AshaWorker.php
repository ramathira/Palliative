<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AshaWorker extends Model
{
    protected $table = 'mt_asha_workers';
    protected $fillable = ['asha_worker_name','ward','contact_number'];
    public function ward()
    {
        return $this->belongsTo(Ward::class,'ward');
    }
}
