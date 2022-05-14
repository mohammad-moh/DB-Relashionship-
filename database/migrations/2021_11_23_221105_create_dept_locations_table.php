<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeptLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept_locations', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('Dnumber');
            $table->string('Dlocation');
            $table->primary(['Dnumber', 'Dlocation']);
            $table->foreign('Dnumber')->references('Dnumber')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dept_locations');
    }
}
