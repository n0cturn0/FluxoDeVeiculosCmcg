<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Veiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table)
        {
            $table->id();
        $table->integer('userid');
        $table->string('marca');
        $table->string('modelo');
        $table->string('anodefabricacao');
        $table->string('cor');
        $table->string('documentoveiculo');
        $table->integer('status');
        $table->string('observacao');
        $table->integer('ano');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
