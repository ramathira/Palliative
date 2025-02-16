<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AshaWorker extends Model
{
    protected $table = 'mt_asha_workers';
    protected $fillable = ['asha_worker_name','ward','contact_number'];
    public function ward_details()
    {
        return $this->belongsTo(Ward::class, 'ward', 'id');
    }

    public function subcentre_details()
{
    return $this->hasOneThrough(SubCentre::class, Ward::class, 'id', 'id', 'ward', 'subcentre');
}
}
