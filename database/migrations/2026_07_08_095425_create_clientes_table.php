<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->enum('tipo_cliente', ['PF', 'PJ'])->default('PF');
            $table->string('cpf_cnpj')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->date('data_nascimento')->nullable();

            $table->string('empresa')->nullable();
            $table->string('cargo')->nullable();

            $table->string('cep')->nullable();
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado', 2)->nullable();

            $table->string('origem')->nullable();
            $table->string('indicado_por')->nullable();
            $table->string('consultor_responsavel')->nullable();

            $table->date('cliente_desde')->nullable();
            $table->date('ultima_interacao')->nullable();
            $table->date('proximo_contato')->nullable();

            $table->enum('status', ['ativo', 'inativo', 'prospect'])->default('ativo');
            $table->boolean('lgpd_aceito')->default(false);

            $table->text('observacoes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};