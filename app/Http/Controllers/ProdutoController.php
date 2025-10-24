<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    public function publicIndex()
    {
        $produtos = Produto::latest()->get();
        return view('pages.produtos.public-index', compact('produtos'));
    }

    public function adminIndex()
    {
        $produtos = Produto::latest()->get();
        return view('pages.produtos.admin-index', compact('produtos'));
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('pages.produtos.show', compact('produto'));
    }

    public function create()
    {
        return view('pages.produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('imagem')->store('products', 'public');

        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
            'imagem' => $path,
        ]);

        return redirect()->route('admin.produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('pages.produtos.edit', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nome', 'descricao', 'preco', 'quantidade']);
        
        if ($request->hasFile('imagem')) {
            if ($produto->imagem) {
                Storage::disk('public')->delete($produto->imagem);
            }
            $data['imagem'] = $request->file('imagem')->store('products', 'public');
        }

        $produto->update($data);

        return redirect()->route('admin.produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);

        if ($produto->imagem) {
            Storage::disk('public')->delete($produto->imagem);
        }

        $produto->delete();

        return redirect()->route('admin.produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
}