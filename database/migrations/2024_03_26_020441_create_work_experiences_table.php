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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained('personal_information')->onDelete('cascade');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('position_title')->nullable();
            $table->string('company')->nullable();
            $table->integer('monthly_salary')->nullable();
            $table->integer('salary_grade')->nullable();
            $table->integer('salary_step')->nullable();
            $table->string('status_of_appointment')->nullable();
            $table->boolean('govt_service')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
