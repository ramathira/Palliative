<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
       protected $table = 'mt_wards';

    
    protected $fillable = [
        'ward_name',
        'subcentre'
        
    ];
     // The relationship between Ward and WardMember (One to One)
     public function wardMember()
     {
         return $this->hasOne(WardMember::class, 'ward');
     }
     public function subcentre()
     {
         return $this->belongsTo(SubCentre::class, 'subcentre', 'id');
     }

     public function mlsps()
    {
        return $this->belongsToMany(Mlsp::class, 'mlsp_ward', 'ward_id', 'mlsp_id');
    }
}
