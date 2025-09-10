@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
<div class="text-center">
    <h1 class="display-4 fw-bold text-indigo">Bem-vindo ao nosso sistema!</h1>
    <p class="lead text-muted">Use o botão Produtos no menu para ver todos os produtos disponíveis.</p>

    <div class="d-flex justify-content-center gap-3 mt-4">
        <a href="{{ url('/produtos') }}" class="btn btn-indigo btn-lg rounded-pill px-4">Explorar Produtos</a>
        <a href="{{ url('/cadastro') }}" class="btn btn-outline-indigo btn-lg rounded-pill px-4">Criar Conta</a>
    </div>
</div>
@endsection


