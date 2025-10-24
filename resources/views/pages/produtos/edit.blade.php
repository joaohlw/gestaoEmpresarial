@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Editar Produto</h2>

    <form action="{{ route('admin.produtos.update', $produto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                   id="nome" name="nome" value="{{ old('nome', $produto->nome) }}" required>
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control @error('descricao') is-invalid @enderror" 
                      id="descricao" name="descricao" rows="3">{{ old('descricao', $produto->descricao) }}</textarea>
            @error('descricao')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" class="form-control @error('preco') is-invalid @enderror" 
                   id="preco" name="preco" value="{{ old('preco', $produto->preco) }}" step="0.01" required>
            @error('preco')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" class="form-control @error('quantidade') is-invalid @enderror" 
                   id="quantidade" name="quantidade" value="{{ old('quantidade', $produto->quantidade) }}" required>
            @error('quantidade')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem (Opcional)</label>
            <input type="file" class="form-control @error('imagem') is-invalid @enderror" 
                   id="imagem" name="imagem">
            @error('imagem')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            
            @if($produto->imagem)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $produto->imagem) }}" 
                         alt="{{ $produto->nome }}" 
                         style="max-width: 100px; height: auto;">
                    <p class="text-muted small mt-1">Imagem atual</p>
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Produto</button>
        <a href="{{ route('admin.produtos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
