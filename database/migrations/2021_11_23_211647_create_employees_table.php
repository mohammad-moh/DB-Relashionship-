<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->string('Fname');
            $table->string('Lname');
            $table->integer('Ssn');
            $table->date('Bdate');
            $table->string('Address')->nullable();
            $table->string('Sex');
            $table->decimal('Salary',8,2);
            $table->integer('Super_ssn')->nullable();
            $table->integer('Dno')->nullable();
            $table->primary('Ssn');
            $table->foreign('Super_ssn')->references('Ssn')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
