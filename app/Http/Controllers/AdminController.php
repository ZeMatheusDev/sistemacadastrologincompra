<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function cadastroProduto(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->save();
        return redirect()->back()->with('cadastradoProduto', 'Produto cadastrado com sucesso!');
    }
}
