<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependents', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('Essn');
            $table->string('Dependent_name');
            $table->string('Sex');
            $table->date('Bdate');
            $table->string('Relationship');
            $table->primary(['Essn', 'Dependent_name']);
            $table->foreign('Essn')->references('Ssn')->on('employees');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependents');
    }
}
