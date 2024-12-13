<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mlsp extends Model
{
    protected $table = 'mt_mid_level_service_providers';
    protected $fillable = ['mlsp_name','subcentre_id'];
    public function subcentre()
    {
        return $this->belongsTo(SubCentre::class,'subcentre_id');
    }
    public function wards()
    {
        return $this->belongsToMany(Ward::class, 'mlsp_ward', 'mlsp_id', 'ward_id');
    }
}
