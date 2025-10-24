@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Gerenciar Produtos</h2>
        <a href="{{ route('admin.produtos.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Novo Produto
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            @if($produtos->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produtos as $produto)
                            <tr>
                                <td>
                                    @if($produto->imagem)
                                        <img src="{{ asset('storage/' . $produto->imagem) }}" 
                                             alt="{{ $produto->nome }}" 
                                             style="width: 50px; height: 50px; object-fit: cover;">
                                    @else
                                        <span class="text-muted">Sem imagem</span>
                                    @endif
                                </td>
                                <td>{{ $produto->nome }}</td>
                                <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                                <td>{{ $produto->quantidade }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.produtos.edit', $produto->id) }}" 
                                           class="btn btn-sm btn-outline-primary">Editar</a>
                                        
                                        <form action="{{ route('admin.produtos.destroy', $produto->id) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                                Excluir
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-4">
                    <p class="text-muted">Nenhum produto cadastrado.</p>
                    <a href="{{ route('admin.produtos.create') }}" class="btn btn-primary">
                        Cadastrar Primeiro Produto
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection



