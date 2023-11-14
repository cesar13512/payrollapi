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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('bioid');
            $table->string('name');
            $table->string('position');
            $table->integer('rate');
            $table->integer('cola')->nullable();
            $table->string('department');
            $table->string('subdepartment')->nullable();
            $table->string('subsubdepartment')->nullable();
            $table->string('assign')->nullable();
            $table->string('dm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
