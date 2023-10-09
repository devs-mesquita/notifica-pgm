<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notificacao', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('n_processo');
            $table->string('data_processo');
            $table->string('codigo_verificador');
            $table->string('n_acordo');
            
            $table->text('solicitacao1');
            $table->text('solicitacao2');
            $table->text('solicitacao3');
            //------------------------FOREIGN--------------------------------
            $table->BigInteger('user_id')->unsigned();
            //---------------------------------------------------------------

            $table->timestamps();
        });

        Schema::table('notificacao', function($table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacao');
    }
};
