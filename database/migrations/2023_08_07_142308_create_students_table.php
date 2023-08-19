<?php

use App\Models\Institute;
use App\Models\ExamCenter;
use App\Models\StudentClass;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no')->unique();
            $table->string('roll_no')->unique()->nullable();
            $table->string('school_madrasa');
            $table->string('student_type');
            $table->string('area');
            $table->string('name_bn');
            $table->string('name_en');
            $table->string('father_name_bn');
            $table->string('father_name_en');
            $table->string('mother_name_bn');
            $table->string('mother_name_en');
            $table->foreignIdFor(Institute::class);
            $table->foreignIdFor(StudentClass::class);
            $table->foreignIdFor(ExamCenter::class)->nullable();
            $table->string('class_roll');
            $table->string('class_division')->nullable();
            $table->string('class_section');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('permanent_address_village');
            $table->string('permanent_address_post_office');
            $table->string('permanent_address_thana');
            $table->string('permanent_address_district');
            $table->string('mobile')->unique();
            $table->string('facebook')->nullable();
            $table->date('dob');
            $table->string('image');
            $table->string('father_occupation');
            $table->string('mother_occupation');
            $table->string('blood_group')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('absent_of_parent_name');
            $table->string('absent_of_parent_relation');
            $table->string('absent_of_parent_occupation');
            $table->string('absent_of_parent_annual_earning');
            $table->string('previous_scholarship_name_group')->nullable();
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->float('marks', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};