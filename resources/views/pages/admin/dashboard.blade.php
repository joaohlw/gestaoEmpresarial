@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="painel-admin centralizado">
    <h2 class="titulo-painel cor-principal">Painel do Administrador</h2>
    <p class="texto-secundario">Bem-vindo! Aqui você pode gerenciar clientes, produtos e relatórios.</p>
</div>

<div class="list-group">
    <a href="{{ route('admin.produtos.index') }}" class="list-group-item list-group-item-action">
        Produtos
    </a>
    <a href="{{ route('admin.clientes.index') }}" class="list-group-item list-group-item-action">
        Clientes
    </a>
</div>
@endsection


