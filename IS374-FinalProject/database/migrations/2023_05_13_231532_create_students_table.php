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
            $table->id('StudentId');
            $table->decimal('GPA', $precision = 3, $scale = 2); // precision (total digits) and scale (decimal digits)
            // $table->double('GPA', 3, 2); 
            $table->integer('HoursAchieved');
            $table->foreign('AdvisorId')->references('AdvisorId')->on('FullTimeAdvisor');
            $table->foreign('PersonId')->references('PersonId')->on('people');
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
