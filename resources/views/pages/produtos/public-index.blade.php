@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Nossos Produtos</h2>

    <div class="row">
        @foreach ($produtos as $produto)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                @if($produto->imagem)
                    <img src="{{ asset('storage/' . $produto->imagem) }}" 
                         class="card-img-top" 
                         alt="{{ $produto->nome }}"
                         style="height: 200px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $produto->nome }}</h5>
                    <p class="card-text">{{ Str::limit($produto->descricao, 100) }}</p>
                    <h6 class="text-success">R$ {{ number_format($produto->preco, 2, ',', '.') }}</h6>
                </div>
                <div class="card-footer bg-white">
                    <a href="{{ route('produtos.show', $produto->id) }}" 
                       class="btn btn-primary w-100">Ver Detalhes</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if($produtos->isEmpty())
        <div class="text-center py-4">
            <p class="text-muted">Nenhum produto disponível no momento.</p>
        </div>
    @endif
</div>
@endsection