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
        Schema::create('mt_ward_members', function (Blueprint $table) {
            $table->id();
            $table->string('member_name', 128);
            $table->unsignedBigInteger('ward');
            $table->foreign('ward') 
                  ->references('id')      
                  ->on('mt_wards')    
                  ->onDelete('cascade'); 
            $table->tinyInteger('status')->default(1);  // Corrected the status column
            $table->string('contact_number', 15)->unique()->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ward_member');
    }
};
