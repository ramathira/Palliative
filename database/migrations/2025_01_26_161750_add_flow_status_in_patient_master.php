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
            $table->unsignedBigInteger('flow_status_id')->nullable()  ;
            $table->foreign('flow_status_id')->references('id')->on('mt_flow_status')->onDelete('cascade'); 
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
