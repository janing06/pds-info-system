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
        Schema::create('civil_service_eligibilties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained('personal_information')->onDelete('cascade');
            $table->string('career_service')->nullable();
            $table->integer('rating')->nullable();
            $table->date('examination_date')->nullable();
            $table->string('examination_place')->nullable();
            $table->string('license_number')->nullable();
            $table->date('license_validity_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('civil_service_eligibilties');
    }
};
