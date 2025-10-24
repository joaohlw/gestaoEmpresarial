<div class="card shadow-sm border-0 rounded-4">
  <a href="{{ route('produtos.show', $id) }}">
    <img src="{{ $imagem }}" class="card-img-top" alt="{{ $nome }}">
    <div class="card-body text-center">
      <h5 class="card-title">{{ $nome }}</h5>
      <p class="card-text">{{ \Illuminate\Support\Str::limit($descricao, 100) }}</p>
      <p class="card-text text-muted">{{ $preco }}</p>
    </div>
  </a>
</div>







