<div class="card shadow-sm border-0 rounded-4 h-100">
  <div style="width: 100%; height: 200px; overflow: hidden; display: flex; align-items: center; justify-content: center; border-top-left-radius: 1rem; border-top-right-radius: 1rem; background: #f8f9fa;">
    <img src="{{ $imagem ?? 'https://via.placeholder.com/600x300' }}" 
         alt="{{ $nome ?? 'Produto' }}" 
         style="max-width: 100%; max-height: 100%; object-fit: contain;">
  </div>
  <div class="card-body text-center">
    <h5 class="fw-bold">{{ $nome ?? 'Produto' }}</h5>
    <a href="{{ url('/produtos/' . $id) }}" class="btn btn-outline-indigo rounded-pill px-4">Ver Detalhes</a>
  </div>
</div>







