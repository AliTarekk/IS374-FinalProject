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
        // pivot table to map many-to-many relationship course_student
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            // $table->foreign('StudentId')->references('StudentId')->on('students');
            $table->foreignId('StudentId')->constrained(
                table: 'students', column: 'StudentId',
            );
            // $table->foreign('CourseCode')->references('CourseCode')->on('courses');
            $table->foreignId('CourseCode')->constrained(
                table: 'courses', column: 'CourseCode',
            );
            $table->double('FirstMidterm')->default(0);
            $table->double('SecondMidterm')->default(0);
            $table->double('CourseWork')->default(0);
            $table->enum('Grade', ['A', 'B', 'C', 'D', 'F', 'U'])->default('U');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enroll');
    }
};
