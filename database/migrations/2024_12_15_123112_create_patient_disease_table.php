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
        Schema::create('patient_disease', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade');  
            $table->string('diagnosis',1000)  ;
            $table->date('diagnosed_date')  ;
            $table->string('prior_condition',1000)  ;
            $table->string('treating_hospital',30)  ;
            $table->string('doctor_name',30)  ;
            $table->tinyInteger('hospital_type') ->comment('1-Public,2-Private');
            $table->tinyInteger('allopathy')->comment('1-yes,2-no')->nullable();
            $table->string('allopathy_details',500)->nullable()  ;
            $table->tinyInteger('ayurveda')->comment('1-yes,2-no')->nullable();
            $table->string('ayurveda_details',500)->nullable()  ;
            $table->tinyInteger('homeopathy')->comment('1-yes,2-no')->nullable();
            $table->string('homeopathy_details',500)->nullable()  ;
            $table->string('present_health_condition',1000)->nullable()  ;
            $table->unsignedBigInteger('treatment_type_id')  ;
            $table->foreign('treatment_type_id')->references('id')->on('mt_treatment_type')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_disease');
    }
};
