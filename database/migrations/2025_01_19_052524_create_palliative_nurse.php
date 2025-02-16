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
        Schema::create('mt_palliative_nurse', function (Blueprint $table) {
            $table->id();
            $table->string('nurse_name',50);
            $table->unsignedBigInteger('institution_id')->default(4);
            $table->foreign('institution_id')->references('id')->on('mt_health_institutions')->onDelete('cascade'); 
            $table->string('phone_no',12); 
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
        Schema::dropIfExists('mt_palliative_nurse');
    }
};
