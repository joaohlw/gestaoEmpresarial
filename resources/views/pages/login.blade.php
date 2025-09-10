@extends('layouts.app')

@section('title', 'Login')

@section('content')
<form class="w-50 mx-auto">
    <x-input label="Email" name="email" type="email" />
    <x-input label="Senha" name="senha" type="password" />
    <x-botao type="btn-dark">Entrar</x-botao>
</form>
@endsection
