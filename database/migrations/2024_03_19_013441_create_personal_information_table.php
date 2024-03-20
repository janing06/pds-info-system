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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('surname');
            $table->enum('suffix', ['N/A', 'JR', 'SR', 'II', 'III', 'IV']);
            $table->timestamp('date_of_birth');
            $table->string('place_of_birth');
            $table->enum('sex', ['male', 'female']);
            $table->enum('civil_status', ['single', 'married', 'widowed', 'separated']);
            $table->float('height');
            $table->float('weight');
            $table->string('blood_type');
            $table->string('gsis_id');
            $table->string('pag_ibig_id');
            $table->string('philhealth_id');
            $table->string('sss_id');
            $table->string('tin_id');
            $table->string('agency_employee_no');
            $table->enum('citizenship', ['filipino', 'dual_citizen_by_birth', 'dual_citizen_by_naturalization']);
            $table->string('country');
            $table->string('telephone_no');
            $table->string('mobile_no');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};
