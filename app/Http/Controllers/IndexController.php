<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class IndexController extends Controller
{
    public function index()
    {
        $pageTitle = 'Clientes';
        $clientes = Cliente::latest()->get();
        return view('pages.admin.clientes.index', compact('pageTitle', 'clientes'));
    }
}
