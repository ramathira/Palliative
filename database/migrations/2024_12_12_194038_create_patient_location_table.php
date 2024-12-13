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
        Schema::create('patient_location', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade');  
            $table->unsignedBigInteger('subcentre_id');
            $table->foreign('subcentre_id')->references('id')->on('mt_subcentres')->onDelete('cascade');  
            $table->unsignedBigInteger('ward_id');
            $table->foreign('ward_id')->references('id')->on('mt_wards')->onDelete('cascade');  
            $table->unsignedBigInteger('ashaworker_id');
            $table->foreign('ashaworker_id')->references('id')->on('mt_asha_workers')->onDelete('cascade'); 
            $table->BigInteger('awc');
            $table->foreign('awc')->references('id')->on('mt_anganwadi')->onDelete('cascade'); 
            $table->unsignedBigInteger('awc_worker_id');
            $table->foreign('awc_worker_id')->references('id')->on('mt_anganwadi_workers')->onDelete('cascade');
            $table->tinyInteger('status') ->comment('1-Active,2-Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_location');
    }
};
