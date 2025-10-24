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
            $table->string('name');
            $table->string('senha');
            $table->string('cpf')->unique();
            $table->string('email')->unique();
            $table->string('cep');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf', 2);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
