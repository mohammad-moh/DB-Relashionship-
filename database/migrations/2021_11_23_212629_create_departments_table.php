<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('Dname');
            $table->integer('Dnumber');
            $table->integer('Mgr_ssn')->nullable();
            $table->date('Mgr_start_date');
            $table->primary('Dnumber');
            $table->foreign('Mgr_ssn')->references('Ssn')->on('employees');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
