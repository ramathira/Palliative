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
        Schema::create('patient_monthly_assessment_physical_difficulty', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade'); 
            $table->unsignedBigInteger('visit_id')->nullable()  ;
            $table->foreign('visit_id')->references('id')->on('patient_monthly_assessment_visit')->onDelete('cascade'); 
            $table->unsignedBigInteger('enteredby');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
            $table->string('physical_difficulty') ;
            $table->tinyInteger('duration') ;
            $table->tinyInteger('period') ->comment('1-days,2-weeks,3- months,4-years');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_monthly_assessment_physical_difficulty');
    }
};
