@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<form class="w-50 mx-auto">
    <x-input label="Usuário" name="usuario" />
    <x-input label="Senha" name="senha" type="password" />
    <x-botao type="btn-danger">Entrar</x-botao>
</form>
@endsection
