<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prop', function (Blueprint $table) {
        $table->id();
        $table->integer('userid');
        $table->integer('selo');
        $table->string('proprietario');
        $table->bigInteger('cpf');
        $table->string('telefone');
        $table->string('fotoname');
        $table->date('datavalidade');
        $table->integer('status');
        $table->integer('ano');
        $table->timestamp('last_used_at')->nullable();
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
        //
    }
}
