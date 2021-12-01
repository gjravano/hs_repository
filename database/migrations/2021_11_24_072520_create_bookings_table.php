<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->string('Surname')->nullable();
            $table->string('MiddleName')->nullable();
            $table->string('FirstName')->nullable();
            $table->string('Birthday')->nullable();
            $table->string('Age')->nullable();
            $table->string('StreetName')->nullable();
            $table->string('City')->nullable();
            $table->string('Postal_Code')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('MobileNumber')->nullable();
            $table->string('Email')->nullable();
            $table->string('FullName')->nullable();
            $table->string('EmergencyMobileNumber')->nullable();
            $table->string('Relationship')->nullable();
            $table->id();
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
        Schema::dropIfExists('bookings');
    }
}
