<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('contatos', function (Blueprint $table) {
        $table->bigIncrements('id')->unsigned();
        $table->string('nome');
        $table->bigInteger('endereco_id')->unsigned()->index();
        $table->bigInteger('telefone_id')->unsigned()->index();
        $table->string('email')->unique();
        $table->text('observacao')->nullable();
        $table->string('UF', 2);
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
        Schema::dropIfExists('contatos');
    }
}
