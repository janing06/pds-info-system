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
        Schema::create('residential_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained(
                table: 'personal_information',
                indexName: 'residential_address_personal_information_id'
            )->onDelete('cascade');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->string('street')->nullable();
            $table->string('house_no')->nullable();
            $table->string('subdivision')->nullable();
            $table->integer('zipcode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residential_address');
    }
};
