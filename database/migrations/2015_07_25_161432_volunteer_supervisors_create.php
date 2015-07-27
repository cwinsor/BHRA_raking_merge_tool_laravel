<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VolunteerSupervisorsCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_supervisors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->string('Date', 20);
            $table->string('Task', 20);
            $table->string('Quantity', 2);
            $table->string('Desc', 1);
            $table->string('StartTime', 20);
            $table->string('EndTime', 20);
            $table->string('Who', 25);
            $table->string('FirstName', 20);
            $table->string('LastName', 20);
            $table->string('Spots', 11);
            $table->string('Comments', 5);
            $table->string('HoursTracking', 5);
            $table->string('Email', 20);
            $table->string('Phone', 20);
            $table->string('SignupTime', 5);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('volunteer_supervisors');
    }
}
