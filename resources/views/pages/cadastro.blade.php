@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
<form class="w-50 mx-auto">
    <x-input label="Nome" name="nome" />
    <x-input label="Email" name="email" type="email" />
    <x-input label="Senha" name="senha" type="password" />
    <x-botao type="btn-primary">Cadastrar</x-botao>
</form>
@endsection
