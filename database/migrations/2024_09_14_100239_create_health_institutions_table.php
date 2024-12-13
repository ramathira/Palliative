<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_health_institutions', function (Blueprint $table) {
            $table->id();
            $table->string('health_institution',128);
            $table->unsignedSmallInteger('block');
            $table->foreign('block') 
            ->references('id')      
            ->on('mt_health_blocks')    
            ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_institutions');
    }
};
