<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoksOnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('woks_ons', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('Essn');
            $table->integer('Pno');
            $table->integer('Hours');
            $table->primary(['Essn', 'Pno']);
            $table->foreign('Essn')->references('Ssn')->on('employees');
            $table->foreign('Pno')->references('Pnumber')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('woks_ons');
    }
}
