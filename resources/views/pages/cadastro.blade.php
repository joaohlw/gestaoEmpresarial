@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
<form action="{{ route('clientes.store') }}" method="POST" class="w-50 mx-auto">
    @csrf
    <x-input label="Nome" name="name" />
    <x-input label="Senha" name="senha" type="password" />
    <x-input label="CPF" name="cpf" />
    <x-input label="Email" name="email" type="email" />
    <x-input label="CEP" name="cep" />
    <button type="button" id="btnBuscarCep" class="btn btn-primary mb-4">Buscar CEP</button>
    <x-input label="Logradouro" name="logradouro" />
    <x-input label="Bairro" name="bairro" />
    <x-input label="Cidade" name="cidade" />
    <x-input label="UF" name="uf" />
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection

