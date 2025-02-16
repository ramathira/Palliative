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
        Schema::create('patient_blue_form_detail_exam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade'); 
            $table->smallInteger('systolic_bp');
            $table->smallInteger('diastolic_bp');
            $table->smallInteger('pulse_rate');
            $table->tinyInteger('oral_hygiene') ;
            $table->tinyInteger('skin_care') ;
            $table->tinyInteger('skin_integrity') ;
            $table->tinyInteger('pressure_sore') ;
            $table->tinyInteger('private_hygiene') ;
            $table->unsignedBigInteger('enteredby')->nullable();
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
            $table->tinyInteger('status') ->comment('1-Active,2-Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_blue_form_detail_exam');
    }
};
