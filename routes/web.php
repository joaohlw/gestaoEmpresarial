<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
});
