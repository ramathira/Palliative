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
        Schema::create('mt_wards', function (Blueprint $table) {
            $table->id();
            $table->string('ward_name',128);
            $table->unsignedBigInteger('subcentre');
            $table->foreign('subcentre') 
            ->references('id')      
            ->on('mt_subcentres')    
            ->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mt_wards');
    }
};
