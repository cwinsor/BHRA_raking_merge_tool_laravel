<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppointmentsCreate extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->string('ApptStart', 20);
            $table->string('ApptEnd', 20);
            $table->string('ApptDescription', 40);
            $table->string('foo', 10);
            $table->string('ANumber', 2);
            $table->string('BNumber', 2);
            $table->string('CustName', 35);
            $table->string('CustPhone', 15);
            $table->string('CustStreet', 70);
            $table->string('CustDescription', 250);
            $table->string('Team', 10);
            $table->string('CustEmail', 50);
            $table->string('ReservedBy', 20);
            $table->string('DTme1', 20);
            $table->string('DTme2', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('appointments');
    }
}
