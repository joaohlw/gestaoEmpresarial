<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    public function store(StoreClienteRequest $request)
    {
        Cliente::create([
        'name' => $request->name,
        'email' => $request->email,
        'cpf' => $request->cpf,
        'senha' => bcrypt($request->senha),
        'cep' => $request->cep,
        'logradouro' => $request->logradouro,
        'bairro' => $request->bairro,
        'cidade' => $request->cidade,
        'uf' => $request->uf,
]);


        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }

}
