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
        Schema::create('jphn_ward', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jphn_id');
            $table->foreign('jphn_id')->references('id')->on('mt_jphn')->onDelete('cascade');  
            $table->unsignedBigInteger('ward_id');
            $table->foreign('ward_id')->references('id')->on('mt_wards')->onDelete('cascade');  
            $table->tinyInteger('status') ->comment('1-Active,2-Inactive'); 
            $table->unsignedBigInteger('enteredby');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jphn_ward');
    }
};
