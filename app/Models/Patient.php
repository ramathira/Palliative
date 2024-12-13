<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patient_master';
    protected $fillable = ['first_name','second_name','dob','gender','phone_no','aadhar','status'];
}
