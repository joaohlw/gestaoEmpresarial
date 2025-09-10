@extends('layouts.app')

@section('title', 'Detalhes do Produto')

@section('content')
@php
    $produtos = [
        1 => ['nome' => 'Silksong', 'imagem' => 'https://upload.wikimedia.org/wikipedia/pt/8/86/Hollow_Knight_Silksong_cover.jpeg'],
        2 => ['nome' => 'GTA VI', 'imagem' => 'https://i.pinimg.com/736x/ad/be/df/adbedf035a26b9c20741c45194776c41.jpg'],
        3 => ['nome' => 'Ghost of yotei', 'imagem' => 'https://m.media-amazon.com/images/M/MV5BODA2YzRkODktNTIwYi00ZDk1LThlMTAtYzE4MGEyODM4NzZlXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'],
    ];

    $produto = $produtos[$id] ?? ['nome' => 'Produto não encontrado', 'imagem' => 'https://via.placeholder.com/600x300'];
@endphp

<div class="card shadow-sm w-75 mx-auto border-0 rounded-4">
  <div style="width: 100%; height: 350px; overflow: hidden; display: flex; align-items: center; justify-content: center; border-top-left-radius: 1rem; border-top-right-radius: 1rem; background: #f8f9fa;">
    <img src="{{ $produto['imagem'] }}" 
         alt="{{ $produto['nome'] }}" 
         style="max-width: 100%; max-height: 100%; object-fit: contain;">
  </div>
  <div class="card-body text-center">
    <h2 class="fw-bold text-indigo">{{ $produto['nome'] }}</h2>
    <p class="text-muted">Descrição detalhada do produto {{ $id }}.</p>
    <a href="{{ url('/produtos') }}" class="btn btn-outline-indigo rounded-pill px-4">⬅ Voltar para Produtos</a>
  </div>
</div>

@endsection
