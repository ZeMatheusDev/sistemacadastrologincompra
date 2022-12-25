<?php

namespace App\Http\Controllers;

use App\Models\usuarioProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function comprarIndex(){
        $produtos = DB::table('produto')
        ->get();
        return view('compra', ['produtos' => $produtos]);
    }

    public function comprarProduto(Request $request){
        $pedido = new usuarioProduto();
        $pedido->user_id = $request->usuario_id;
        $pedido->produto_id = $request->produto_id;
        $pedido->save();
        return redirect()->back()->with('comprado', 'Compra feito com sucesso!');
    }

    public function comprasUsuario(){
        $todasCompras = DB::table('pedido')
        ->where('user_id', '=', session()->all()['id'])
        ->get();
        foreach($todasCompras as $compra){
            $nomeDasCompras[] = DB::table('produto')
            ->where('id', '=', $compra->produto_id)
            ->first();
        }
        return view('compras', ['nomeDasCompras' => $nomeDasCompras]);
    }

    public function excluirCompra(Request $request){
        dd($request);
    }
}
