<?php
// written by: Driane PPerez
  // tested by: Driane Perez
  // debugged by: Driane Perez

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
        Schema::create('vessels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Vessel');
            $table->integer('voyage_number');
            $table->dateTime('ETA');
            $table->dateTime('ETD');
            $table->dateTime('ATA');
            $table->dateTime('ATD');
            $table->string('pilot_name');
            $table->string('operation_supervisor');
            $table->string('gang_foreman');
            $table->string('stevedore_gang');
            $table->string('crane_operator');
            $table->string('Head_operator');
            $table->string('histacker_operator');
            $table->string('Machines_needed');
            $table->string('finish');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vessels');
    }
};
