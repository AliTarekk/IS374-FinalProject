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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('CourseCode');
            $table->integer('CreditHours');
            $table->integer('MinStudents');
            $table->string('CourseTitle');
            $table->foreign('DepartmentId')->references('DepartmentId')->on('departments');
            $table->foreign('CoordinatorId')->references('CoordinatorId')->on('FullTimeCoordinator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
