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
        Schema::table('patient_medication', function (Blueprint $table) {
            $table->tinyInteger('duration')->after('period')->nullable();
            $table->tinyInteger('timespan')->after('duration')->nullable()->comment('1-Days,2-Weeks,3-Months,4-Years');
            $table->tinyInteger('medicine_mode')->after('medication');            
            $table->foreign('route')->references('id')->on('mt_medicine_mode')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patient_medication', function (Blueprint $table) {
            //
        });
    }
};
