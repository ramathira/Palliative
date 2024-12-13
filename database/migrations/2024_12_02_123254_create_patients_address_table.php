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
        Schema::create('patients_address', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade');  
            $table->string('house_no',8);
            $table->string('address');
            $table->string('landmark',50);
            $table->tinyInteger('status') ->comment('1-Active,2-Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_address');
    }
};
