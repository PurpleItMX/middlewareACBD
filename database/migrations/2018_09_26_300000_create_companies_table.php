<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id_company')->index();
            $table->integer('id_client');
            $table->string('name');
            $table->string('licence');
            $table->string('date_create');
            $table->string('date_end');
            $table->string('time');
            $table->string('estatus');
            $table->string('email');
            $table->string('used');
            $table->string('ip')->nullable();
            //$table->foreign('id_client')->references('id_client')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
