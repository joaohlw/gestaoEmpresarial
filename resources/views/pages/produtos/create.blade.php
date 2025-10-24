@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Cadastrar Produto</h2>

    <form action="{{ route('admin.produtos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Produto</label>
            <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" 
                   value="{{ old('nome') }}" required>
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control @error('descricao') is-invalid @enderror" 
                      rows="3">{{ old('descricao') }}</textarea>
            @error('descricao')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="number" name="preco" id="preco" class="form-control @error('preco') is-invalid @enderror" 
                           step="0.01" value="{{ old('preco') }}" required>
                    @error('preco')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" name="quantidade" id="quantidade" class="form-control @error('quantidade') is-invalid @enderror" 
                           value="{{ old('quantidade', 0) }}" required>
                    @error('quantidade')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem do Produto</label>
            <input type="file" name="imagem" id="imagem" class="form-control @error('imagem') is-invalid @enderror" 
                   accept="image/*" required>
            @error('imagem')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-text">
                Formatos: JPEG, PNG, JPG, GIF. Tamanho máximo: 2MB
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Produto</button>
        <a href="{{ route('admin.produtos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection



 