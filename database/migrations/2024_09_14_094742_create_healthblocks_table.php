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
        Schema::create('mt_health_blocks', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('health_block',128);
            $table->unsignedTinyInteger('district');
            $table->foreign('district') 
            ->references('id')      
            ->on('mt_districts')    
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
        Schema::dropIfExists('healthblocks');
    }
};
