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
        Schema::create('patient_monthly_assessment_physiotherapy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade'); 
            $table->unsignedBigInteger('visit_id')  ;
            $table->foreign('visit_id')->references('id')->on('patient_monthly_assessment_visit')->onDelete('cascade');
            
            $table->tinyInteger('physiotherapy') ->comment('1-yes,2-no');
            $table->tinyInteger('passive_mobilisation_known') ->comment('1-yes,2-no');
            $table->tinyInteger('exercise_imp_known') ->comment('1-yes,2-no');
            $table->tinyInteger('chest_therapy_trained') ->comment('1-yes,2-no');
            $table->tinyInteger('time_spend_known') ->comment('1-yes,2-no');
            $table->tinyInteger('daytime_songs') ->comment('1-yes')->nullable();
            $table->tinyInteger('daytime_reading') ->comment('1-yes,2-no')->nullable();
            $table->tinyInteger('daytime_sleeping') ->comment('1-yes,2-no')->nullable();
            $table->tinyInteger('daytime_tv') ->comment('1-yes,2-no')->nullable();
            $table->string('daytime_others') ->nullable();
            

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
        Schema::dropIfExists('patient_monthly_assessment_physiotherapy');
    }
};
