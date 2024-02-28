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
        Schema::create('book_req',function (Blueprint $table){
            $table->increments('id');
              $table->string('Client_name');
                $table->string('contactNum');
              $table->string('Type_package');
            $table->string('Type_service');
            $table->string('Agent_therapist');
             $table->string('time_interval');
             $table->date('Date_schedule');
            $table->string('price');
              $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
