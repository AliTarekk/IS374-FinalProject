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
        Schema::create('sections', function (Blueprint $table) {
            $table->id('SectionId');
            $table->integer('MaxStudents');
            $table->enum('Day',['Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday']);
            $table->integer('Period');
            // $table->foreign('StaffId')->references('StaffId')->on('staff');
            $table->foreignId('StaffId')->constrained(
                table: 'staff', column: 'StaffId',
            );
            // $table->foreign('CourseCode')->references('CourseCode')->on('courses');
            $table->foreignId('CourseCode')->constrained(
                table: 'courses', column: 'CourseCode',
            );
            // $table->foreign('RoomNumber')->references('RoomNumber')->on('rooms');
            $table->foreignId('RoomNumber')->constrained(
                table: 'rooms', column: 'RoomNumber',
            );
            /*$table->increment('SectionId');
            $table->primary(array('SectionId', 'CourseCode'));*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
