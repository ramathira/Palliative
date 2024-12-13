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
        Schema::create('mt_mid_level_service_providers', function (Blueprint $table) {
            $table->id();
            $table->string('mlsp_name');
            $table->unsignedBigInteger('subcentre_id');
            $table->foreign('subcentre_id')->references('id')->on('mt_subcentres')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mlsp');
    }
};
