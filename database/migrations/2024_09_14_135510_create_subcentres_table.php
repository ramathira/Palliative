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
        Schema::create('mt_subcentres', function (Blueprint $table) {
            $table->id();
            $table->string('sub_centre',128);
            $table->unsignedBigInteger('health_institution');
            $table->foreign('health_institution') 
            ->references('id')      
            ->on('mt_health_institutions')    
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
        Schema::dropIfExists('subcentres');
    }
};
