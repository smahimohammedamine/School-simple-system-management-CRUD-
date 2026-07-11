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
        Schema::create('training_courses_enrollements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studentId')->references('id')->on('students')->onDelete('cascade');
            $table->foreignId('trainingCoursesId')->references('id')->on('training_courses')->onDelete('cascade');
            $table->date('enrolement_date')->comment('the day of registration of the student ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_courses_enrollements');
    }
};
