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
        Schema::table('mt_anganwadi', function (Blueprint $table) {
            $table->unsignedBigInteger('subcentre_id');
            $table->foreign('subcentre_id')->references('id')->on('mt_subcentres')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mt_anganwadi', function (Blueprint $table) {
            //
        });
    }
};
