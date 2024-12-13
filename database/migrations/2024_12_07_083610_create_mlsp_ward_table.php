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
        Schema::create('mlsp_ward', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mlsp_id');
            $table->foreign('mlsp_id')->references('id')->on('mt_mid_level_service_providers')->onDelete('cascade');  
            $table->unsignedBigInteger('ward_id');
            $table->foreign('ward_id')->references('id')->on('mt_wards')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mlsp_ward');
    }
};
