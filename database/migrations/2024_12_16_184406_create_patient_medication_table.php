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
        Schema::create('patient_medication', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade');  
            $table->string('medication',30)  ;
            $table->Integer('dose');
            $table->tinyInteger('frequency')->comment('1-Once,2-Twice,3-Thrice'); 
            $table->tinyInteger('period') ->comment('1-Daily,2-Weekly,3-Monthly');
            $table->string('route',30)  ;
            $table->tinyInteger('status') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_medication');
    }
};
