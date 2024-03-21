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
        Schema::create('family_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained(
                table: 'personal_information',
                indexName: 'family_background_personal_information_id'
            )->onDelete('cascade');
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_middle_name')->nullable();
            $table->string('spouse_surname')->nullable();
            $table->enum('spouse_suffix', ['N/A', 'JR', 'SR', 'II', 'III', 'IV'])->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('spouse_employeer')->nullable();
            $table->string('spouse_business_name')->nullable();
            $table->string('spouse_business_address')->nullable();
            $table->string('spouse_telephone_no')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_middle_name')->nullable();
            $table->string('father_surname')->nullable();
            $table->enum('father_suffix', ['N/A', 'JR', 'SR', 'II', 'III', 'IV'])->nullable();
            $table->string('mother_maiden_name')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_middle_name')->nullable();
            $table->string('mother_surname')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_backgrounds');
    }
};
