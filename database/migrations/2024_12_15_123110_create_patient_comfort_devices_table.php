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
        Schema::create('patient_comfort_devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade');  
            $table->unsignedBigInteger('comfort_devices_id');
            $table->foreign('comfort_devices_id')->references('id')->on('mt_comfort_devices')->onDelete('cascade'); 
            $table->tinyInteger('status') ->comment('1-Active,2-Inactive'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_comfort_devices');
    }
};
