<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WardMember extends Model
{
    protected $table = 'mt_ward_members';
    protected $fillable = [
        'member_name',
        'ward',
        'status',
        'contact_number'
        
    ];
    public function ward()
    {
        return $this->belongsTo(Ward::class,'ward');
    }
}
