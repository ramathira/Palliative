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
        Schema::create('mt_junior_health_inspectors', function (Blueprint $table) {
            $table->id();
            $table->string('jhi_name', 128);
            $table->unsignedBigInteger('ward');
            $table->foreign('ward') 
                  ->references('id')      
                  ->on('mt_wards')    
                  ->onDelete('cascade'); 
            $table->tinyInteger('status')->default(1);  
            $table->string('contact_number', 15)->unique()->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mt_junior_health_inspectors');
    }
};
