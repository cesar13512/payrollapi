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
        Schema::create('schedules', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('employee_id');
        $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        $table->dateTime("ontime");
        $table->dateTime("offtime");
        $table->dateTime("intime");
        $table->dateTime("outtime");
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
