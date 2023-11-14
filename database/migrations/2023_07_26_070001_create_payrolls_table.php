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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->date('start');
            $table->date('end');
            $table->integer('hours');
            $table->integer('ot');
            $table->integer('late');
            $table->integer('holiday');
            $table->integer('night');
            $table->integer('third');
            $table->integer('incentive');
            $table->integer('field');
            $table->integer('sss');
            $table->integer('philhealth');
            $table->integer('hdmf');
            $table->integer('cash');
            $table->integer('health');
            $table->integer('housing');
            $table->integer('gross');
            $table->integer('total');
            $table->integer('net');
            $table->integer('deduc');
            $table->integer('lateval');
            $table->integer('absent');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
