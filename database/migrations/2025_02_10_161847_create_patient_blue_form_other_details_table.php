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
        Schema::create('patient_blue_form_other_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade'); 
            $table->unsignedBigInteger('enteredby')->nullable();
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
            $table->tinyInteger('mental_constraint') ->comment('1-Present,2-Absent');
            $table->tinyInteger('low_mood') ->nullable();
            $table->tinyInteger('depression') ->nullable();
            $table->tinyInteger('anxiety') ->nullable();
            $table->tinyInteger('phychiatric_disorder') ->nullable();
            $table->tinyInteger('memory_loss') ->nullable();
            $table->string('mental_constraint_details') ->nullable();
            $table->tinyInteger('social_constraint') ->comment('1-Present,2-Absent');
            $table->tinyInteger('social_exclusion') ->nullable();
            $table->tinyInteger('family_not_Care') ->nullable();
            $table->tinyInteger('no_support_sytem') ->nullable();
            $table->string('social_constraints_detail') ->nullable();
            $table->string('rehabilitation_service');
            $table->string('thing_from_homecare');
            $table->tinyInteger('status') ->comment('1-Active,2-Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_blue_form_other_details');
    }
};
