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
        Schema::table('patient_master', function (Blueprint $table) {
           $table->unsignedBigInteger('enteredby')->after('aadhar');
           $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('patient_medication', function (Blueprint $table) {
            $table->unsignedBigInteger('enteredby')->after('route');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('patient_location', function (Blueprint $table) {
            $table->unsignedBigInteger('enteredby')->after('awc_worker_id');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('patient_family', function (Blueprint $table) {
            $table->unsignedBigInteger('enteredby')->after('income_catogory');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('patient_disease', function (Blueprint $table) {
            $table->unsignedBigInteger('enteredby')->after('treatment_type_id');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('patient_diagnosis', function (Blueprint $table) {
            $table->unsignedBigInteger('enteredby')->after('diagnosis_id');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('patient_comfort_devices', function (Blueprint $table) {
            $table->unsignedBigInteger('enteredby')->after('comfort_devices_id');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('patients_address', function (Blueprint $table) {
            $table->unsignedBigInteger('enteredby')->after('landmark');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('your_table_name', function (Blueprint $table) {
            //
        });
    }
};
