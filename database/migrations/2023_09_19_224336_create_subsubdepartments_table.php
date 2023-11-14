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
        Schema::create('subsubdepartments', function (Blueprint $table) {
            $table->id();
            $table->string('subsubdepartment');
            $table->unsignedBigInteger('subdepartment_id');
            $table->foreign('subdepartment_id')->references('id')->on('subdepartments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsubdepartments');
    }
};
