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
        Schema::create('patient_monthly_assessment_personal_hygiene', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade'); 
            $table->unsignedBigInteger('visit_id')  ;
            $table->foreign('visit_id')->references('id')->on('patient_monthly_assessment_visit')->onDelete('cascade'); 
            $table->tinyInteger('bath_days') ->comment('1-Daily,2-Once in 2-3, 3-Once in a week');
            $table->tinyInteger('family_know_clean') ->comment('1-yes,2-No');
            $table->tinyInteger('oral_mucosa') ->comment('1-dry,2-wet');
            $table->tinyInteger('teeth') ->comment('1-present,2-absent,3-dentures');
            $table->tinyInteger('oral_hygiene') ->comment('1-yes,2-no');
            $table->tinyInteger('candidiasis') ->comment('1-yes')->nullable();
            $table->tinyInteger('halitosis') ->comment('1-yes')->nullable();
            $table->tinyInteger('aphthous ulcer') ->comment('1-yes')->nullable();
            $table->tinyInteger('dental_caries') ->comment('1-yes')->nullable();
            $table->string('other_oral_prblem') ->nullable();
            $table->tinyInteger('advice_on_aspiration') ->comment('1-yes,2-No');
            $table->tinyInteger('nails_care') ->comment('1-yes,2-No');
            $table->tinyInteger('eyes_care') ->comment('1-yes,2-No');
            $table->tinyInteger('skin_care') ->comment('1-yes,2-No');
            $table->tinyInteger('skin_integrity') ->comment('1-yes,2-No');
            $table->tinyInteger('pressure_sore') ->comment('1-yes,2-No');
            $table->tinyInteger('pressure_point_pain') ->comment('1-yes,2-No');
            $table->tinyInteger('skin_moisture') ->comment('1-yes,2-No');
            $table->tinyInteger('physical_activity') ->comment('1-yes,2-No');
            $table->tinyInteger('self_movement') ->comment('1-yes,2-No');
            $table->tinyInteger('daily_diet_valued') ->comment('1-yes,2-No');
            $table->tinyInteger('high_risk_said') ->comment('1-yes,2-No');
            $table->tinyInteger('friction_said') ->comment('1-yes,2-No');
            $table->tinyInteger('pressure_point_said') ->comment('1-yes,2-No');
            $table->tinyInteger('lying_position_known') ->comment('1-yes,2-No');
            $table->tinyInteger('air_water_bed') ->comment('1-yes,2-No');
            $table->tinyInteger('daily_skincare_known') ->comment('1-yes,2-No');
            $table->tinyInteger('drying_parts') ->comment('1-yes,2-No');
            $table->tinyInteger('body_changes') ->comment('1-yes,2-No');
            $table->tinyInteger('ventilated_room') ->comment('1-yes,2-No');
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
        Schema::dropIfExists('patient_monthly_assessment_personal_hygiene');
    }
};
