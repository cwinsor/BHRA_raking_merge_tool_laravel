<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RosterEntriesCreate extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roster_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('r_cox', 10);
            $table->string('r_team', 10);
            $table->string('r_firstname', 20);
            $table->string('r_lastname', 20);
            $table->string('r_gender', 10);
            $table->string('r_school', 20);
            $table->string('r_grade', 2);
            $table->string('r_email', 20);
            $table->string('r_cellphone', 15);
            $table->string('r_homephone', 15);
            $table->string('r_street', 15);
            $table->string('r_town', 20);
            $table->string('r_state', 2);
            $table->string('r_zip', 5);
            $table->string('p1_firstname', 10);
            $table->string('p1-lastname', 10);
            $table->string('p1_email', 20);
            $table->string('p1_cellphone', 20);
            $table->string('p2_firstname', 10);
            $table->string('p2_lastname', 10);
            $table->string('p2_email', 20);
            $table->string('p2_cellphone', 20);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roster_entries');
    }
}
