<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssesmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assigments_Id')->unsigned();
            $table->foreign('assigments_Id')->references('id')
             ->on('assigments');
            $table->integer('students_Id')->unsigned();
            $table->foreign('students_Id')->references('id')
            ->on('students');
            $table->number('nilai');      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assesments');
    }
}
