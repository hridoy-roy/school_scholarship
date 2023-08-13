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
        Schema::table('exam_centers', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('capacity')->nullable();
            $table->integer('order_by')->nullable();
            $table->tinyInteger('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_centers', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('capacity');
            $table->dropColumn('order_by');
            $table->dropColumn('status');
        });
    }
};