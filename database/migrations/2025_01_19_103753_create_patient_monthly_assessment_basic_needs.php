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
        Schema::create('patient_monthly_assessment_basic_needs', function (Blueprint $table) {
            $table->id();
         
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade'); 
            $table->unsignedBigInteger('visit_id')  ;
            $table->foreign('visit_id')->references('id')->on('patient_monthly_assessment_visit')->onDelete('cascade'); 
            $table->tinyInteger('dietary_habits') ->comment('1-Oral,2-Ryles Tube');
            $table->tinyInteger('hungry') ->comment('1-yes,2-no');
            $table->tinyInteger('food_steady_position') ->comment('1-yes,2-no');
            $table->tinyInteger('balanced_diet') ->comment('1-yes,2-no');
            $table->tinyInteger('liquid_food') ->comment('1-yes,2-no');
            $table->tinyInteger('slow_food') ->comment('1-yes,2-no');
            $table->tinyInteger('know_lying_food') ->comment('1-yes,2-no');
            $table->tinyInteger('stool') ->comment('1-Normal,2-INCONTINENCE,3-LOOSE STOOL,4-CONSTIPATION');
            $table->tinyInteger('colostomy') ->comment('1-Present,2-Absent');
            $table->tinyInteger('urination') ->comment('1-Normal,2-on CBD');
            $table->tinyInteger('stoma') ->comment('1-Healthy,2-Unhealthy');
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
        Schema::dropIfExists('patient_monthly_assessment_basic_needs');
    }
};
