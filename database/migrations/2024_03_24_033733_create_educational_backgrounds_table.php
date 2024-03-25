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
        Schema::create('educational_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained('personal_information')->onDelete('cascade');
            $table->enum('level', ['elementary', 'secondary', 'college', 'masters'])->nullable();
            $table->string('school_name')->nullable();
            $table->string('basic_education_degree_course')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('highest_level')->nullable();
            $table->string('year_graduated')->nullable();
            $table->string('honor_received')->nullable();
            $table->string('scholarship')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educational_backgrounds');
    }
};
