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
        Schema::create('students', function (Blueprint $table) {
            $table->id('StudentID');
            $table->decimal('GPA', $precision = 3, $scale = 2); // precision (total digits) and scale (decimal digits)
            // $table->double('GPA', 3, 2); 
            $table->integer('HoursAchieved');
            $table->foreign('AdvisorID')->references('AdvisorID')->on('FullTimeAdvisor');
            $table->foreign('PersonID')->references('PersonID')->on('Person');
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
