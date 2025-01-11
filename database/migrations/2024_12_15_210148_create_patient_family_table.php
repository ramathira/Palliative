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
        Schema::create('patient_family', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade');  
            $table->string('family_member_name',30)  ;
            $table->date('dob')  ;
            $table->tinyInteger('gender') ->comment('1-Male,2-Female,3-Others');
            $table->tinyInteger('patient_relation') ;
            $table->tinyInteger('staying');
            $table->string('education');
            $table->string('income');
            $table->tinyInteger('source_income') ;
            $table->tinyInteger('income_catogory') ;
            $table->tinyInteger('status') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_family');
    }
};
