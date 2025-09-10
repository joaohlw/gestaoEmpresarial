<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold text-indigo" href="{{ url('/') }}">Gestão Empresarial</a>

    <ul class="navbar-nav mx-auto gap-3">
      <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/') }}">Início</a></li>
      <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/produtos') }}">Produtos</a></li>
      <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/sobre') }}">Sobre</a></li>
      <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/login') }}">Login</a></li>
      <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/cadastro') }}">Cadastro</a></li>
    </ul>

    <a href="{{ url('/admin/login') }}" class="btn btn-outline-indigo rounded-pill px-4">Administrador</a>
  </div>
</nav>

