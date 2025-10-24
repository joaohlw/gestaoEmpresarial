@extends('layouts.app')

@section('title', 'Detalhes do Produto')

@section('content')
<div class="card shadow-sm w-75 mx-auto border-0 rounded-4">
  <div style="width: 100%; height: 350px; overflow: hidden; display: flex; align-items: center; justify-content: center; border-top-left-radius: 1rem; border-top-right-radius: 1rem; background: #f8f9fa;">
    <img src="{{ Storage::url($produto->imagem) }}" 
         alt="{{ $produto->nome }}" 
         style="max-width: 100%; max-height: 100%; object-fit: contain;">
  </div>
  <div class="card-body text-center">
    <h2 class="fw-bold text-indigo">{{ $produto->nome }}</h2>
    <p class="text-muted">{{ $produto->descricao }}</p>
    <h4 class="text-success">Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</h4>
    <a href="{{ url('/produtos') }}" class="btn btn-outline-indigo rounded-pill px-4">⬅ Voltar para Produtos</a>
  </div>
</div>
@endsection

