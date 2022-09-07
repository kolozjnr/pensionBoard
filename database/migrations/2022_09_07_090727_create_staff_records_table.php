<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_records', function (Blueprint $table) {
            //$table->id();
            $table->uuid('id')->primary();
            $table->string('staff_id')->unique();
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('dob');
            $table->string('state');
            $table->string('lga');
            $table->string('address');
            $table->string('place_of_work');
            $table->string('basic_salary');
            $table->string('rent_allowance')->nullable();
            $table->string('ultility_allowance')->nullable();
            $table->string('transport_allowance')->nullable();
            $table->date('date_employed');
            $table->string('start_level');
            $table->string('start_step');
            $table->string('status');
            $table->string('total_enrollment')->nullable();
            $table->string('nok_name');
            $table->string('nok_tel')->nullable();
            $table->string('nok_address');
            $table->string('nok_relationship');
            $table->string('user_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_records');
    }
};
