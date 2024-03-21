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
         Schema::create('therapist', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('emp_profile');
            $table->string('emp_fname');
            $table->string('emp_lname');
            $table->string('email_add')->unique();
            $table->string('Permanent_address');
            $table->string('contactNum');
            $table->string('skills');
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('therapist');    }
};
