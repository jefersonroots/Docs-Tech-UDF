<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->id();
            $table->varchar('nome');
           // $table->varchar('cpf');
            $table->varchar('rgm');
            $table->varchar('email');
            $table->varchar('telefone');
         /*    $table->string('usuario');
            $table->string('senha'); */
            $table->varchar('dtNascimento');
            $table->varchar('endereco');
         /*    $table->string('curso'); */
            $table->rememberToken();
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
        Schema::dropIfExists('aluno');
    }
}
