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
        Schema::create('staff', function (Blueprint $table) {
            $table->id('StaffId');
            $table->enum('Title', ['Instructor', 'Professor','AssistantProfessor','AssociateProfessor']);
            //$table->enum('EmploymentType', ['PartTime', $table->enum('FullTimeType',['FullTimeAdvisor','FullTimeAdmin','FullTimeRole','FullTimeCoordinator'])]);
            $table->enum('EmploymentType', ['PartTime', 'FullTime']);
            $table->decimal('PayRate', $precision = 6, $scale = 2);
            $table->decimal('Salary', $precision = 10, $scale = 2);
            $table->foreign('PersonId')->references('PersonId')->on('people');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
