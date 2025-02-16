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
        Schema::create('patient_intial_diagnosis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade'); 
            $table->string('details_from_disease',1000) ;
            $table->tinyInteger('undertanding_abt_disease') ->comment('1-Well Aware, 2-Not Aware, 3-Little Aware');
            $table->tinyInteger('family_abt_disease') ->comment('1-Well Aware, 2-Not Aware, 3-Little Aware');
            $table->tinyInteger('ward_member_aware') ->comment('1-Yes, 2-No');
            $table->tinyInteger('volunteer_type') ->comment('1- Asha Worker, 2-JPHN,3-JHI,4-MLSP');
            $table->unsignedBigInteger('volunteer') ;
            $table->unsignedBigInteger('enteredby');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_intial_diagnosis');
    }
};
