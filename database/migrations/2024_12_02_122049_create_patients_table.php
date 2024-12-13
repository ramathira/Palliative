<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patient_master', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',64);
            $table->string('second_name',64);
            $table->date('dob');
            $table->tinyInteger('gender') ->comment('1-Male,2-Female,3-Others');
            $table->string('phone_no',12);
            $table->string('aadhar',12);     
            $table->tinyInteger('status')  ;
            $table->foreign('status')->references('id')->on('mt_patient_status')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
