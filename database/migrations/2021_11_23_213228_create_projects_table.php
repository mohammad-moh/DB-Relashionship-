<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('Pname');
            $table->integer('Pnumber');
            $table->integer('Plocation');
            $table->integer('Dnum')->nullable();
            $table->primary(['Pnumber', 'Plocation']);
            $table->foreign('Dnum')->references('Dnumber')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
