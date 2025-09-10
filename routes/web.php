<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/cadastro', [HomeController::class, 'cadastro'])->name('cadastro');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/clientes', [AdminController::class, 'clientes'])->name('admin.clientes');
Route::get('/admin/clientes/{id}', [AdminController::class, 'cliente'])->name('admin.clientes.show');




/*Route::get('/', function () {
    return 'Página inicial (home)';
});

Route::get('/produtos', function () {
    return 'Lista de produtos';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto individual com ID $id";
})->where('id', '[0-9]+');

Route::get('/cadastro', function () {
    return 'Cadastro de novo cliente';
});

Route::get('/login', function () {
    return 'Login do cliente';
});

Route::get('/sobre', function () {
    return 'Página institucional';
})->name('sobre');

Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return 'Login do administrador';
    });

    Route::get('/dashboard', function () {
        return 'Painel principal';
    })->name('admin.dashboard');

    Route::get('/clientes', function () {
        return 'Lista de clientes';
    });

    Route::get('/clientes/{id?}', function ($id = null) {
        return $id ? "Cliente específico com ID $id" : "Cliente não especificado";
    });

    Route::get('/fornecedores', function () {
        return 'Lista de fornecedores';
    });

    Route::get('/produtos', function () {
        return 'Lista de produtos cadastrados';
    });

    Route::get('/produto/{slug}', function ($slug) {
        return "Produto com slug: $slug";
    })->where('slug', '[A-Za-z0-9\-]+');
});

Route::redirect('/home', '/');

Route::fallback(function () {
    return 'Página não encontrada';
});*/
