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
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('total_applicant');
            $table->integer('total_applicant_number');
            $table->string('total_scholarship');
            $table->integer('total_scholarship_number');
            $table->string('total_school');
            $table->integer('total_school_number');
            $table->string('total_exam_center');
            $table->integer('total_exam_center_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};