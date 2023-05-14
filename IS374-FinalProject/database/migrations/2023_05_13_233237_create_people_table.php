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
        Schema::create('people', function (Blueprint $table) {
            $table->id('PersonID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('email')->unique();
            $table->date('Birthdate');
            // $table->boolean('isStudent');
            // $table->boolean('isStaff');
            $table->enum('PersonType', ['Student', 'Staff']);
            $table->enum('Gender', ['Male', 'Female', 'Other']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
