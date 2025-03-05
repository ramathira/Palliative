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
        Schema::table('patient_master', function (Blueprint $table) {
            $table->unsignedBigInteger('class') ->comment('1-Home Bound,2-Bed Ridden')->nullable(); 
            $table->foreign('class')->references('id')->on('mt_patient_class')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patient_master', function (Blueprint $table) {
            //
        });
    }
};
