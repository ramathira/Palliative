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
        Schema::create('mt_anganwadi_workers', function (Blueprint $table) {
            $table->id();
            $table->string('awc_worker_name');
            $table->bigInteger('awc_id');
            $table->foreign('awc_id')->references('id')->on('mt_anganwadi')->onDelete('cascade');  
            $table->string('phone_no',12);
            $table->tinyInteger('status')  ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awc_worker');
    }
};
