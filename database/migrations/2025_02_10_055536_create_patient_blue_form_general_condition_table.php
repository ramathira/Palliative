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
        Schema::create('patient_blue_form_general_condition', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade'); 
            $table->string('present_condition',1000);
            $table->tinyInteger('feeding_method') ->comment('1-Oral,2-Ryles Tube');
            $table->tinyInteger('sleep') ->comment('1-Normal,2-Reduced Sleep');
            $table->tinyInteger('bowel') ->comment('1-Normal,2-Incontinence,3-Loose Stool,4-Constipation');
            $table->tinyInteger('colostomy') ->comment('1-Present,2-Absent');
            $table->tinyInteger('bladder_habit') ->comment('1-Normal,2-on CBD');
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
        Schema::dropIfExists('patient_blue_form_general_condition');
    }
};
