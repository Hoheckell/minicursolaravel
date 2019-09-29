<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       
        
        Schema::table('contatos', function (Blueprint $table){
            $table->foreign('telefone_id')->references('id')->on('telefones')->onDelete('cascade');;
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contatos', function (Blueprint $table) {
            //
        });
    }
}
