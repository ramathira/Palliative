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
        Schema::create('patient_disease_conditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade');  
            $table->unsignedBigInteger('disease_condition');
            $table->foreign('disease_condition')->references('id')->on('mt_patient_disease_conditions')->onDelete('cascade'); 
            $table->tinyInteger('status') ->comment('1-Active,2-Inactive'); 
            $table->unsignedBigInteger('enteredby');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_disease_conditions');
    }
};
