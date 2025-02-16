<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JPHN extends Model
{
    protected $table = 'mt_jphn';
    protected $fillable = ['jphn_name','subcentre_id','status','enteredby'];
    public function subcentre_details()
    {
        return $this->belongsTo(SubCentre::class,'subcentre_id');
    }
    public function wards()
    {
        return $this->belongsToMany(Ward::class, 'jphn_ward', 'jphn_id', 'ward_id');
    }
}
