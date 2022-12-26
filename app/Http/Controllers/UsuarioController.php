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
            $nomeDasCompras = DB::table('produto')
            ->where('id', '=', $compra->produto_id)
            ->first();
            $nomeDeCada[] = $nomeDasCompras->nome;
        }
        foreach($todasCompras as $compra){
            $todasComprasEmArray[] = (array) $compra;
        }
        if(isset($todasComprasEmArray)){
        foreach($todasComprasEmArray as $keyTodasCompras => $compra){
            foreach($nomeDeCada as $keyNome => $nome){
                if($keyTodasCompras == $keyNome){
                    $compra['nome'] = $nome;
                    $compra = (object) $compra;
                    $mergeDosArrays[] = $compra;
                }
            }
        }
        }
        else{
            $todasComprasEmArray = [];
            $mergeDosArrays = [];
        }
        return view('compras', ['nomeDasCompras' => $mergeDosArrays]);
    }

    public function excluirCompra(Request $request){
        usuarioProduto::where('id', '=', $request->id_compra)->delete();
        return redirect()->back()->with('excluido', 'Excluido com sucesso!');
    }

    public function teste(Request $request){
        dd($request);
    }
}
