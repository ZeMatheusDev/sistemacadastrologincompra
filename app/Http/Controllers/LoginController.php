<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function logar(Request $request){
        $contaDigitada = DB::table('user')
        ->where('login', '=', $request->login)
        ->where('password', '=', $request->senha)
        ->get();
            if(count($contaDigitada) > 0){
                $idDaConta = $contaDigitada[0]->id;
                $admin = $contaDigitada[0]->admin;
                session(['logado' => 'true']);
                session(['id' => $idDaConta]);
                session(['admin' => $admin]);
            }
            else{
                session(['logado' => 'false']);
            }
            if(session()->all()['logado'] == 'true')
            {
                return view('home', ['logged' => 'Logado com sucesso!']);
            }
            elseif(session()->all()['logado'] == 'false')
            {
            return redirect()->back()->with('NaoLogado', 'Erro ao logar');

            }
        


    }

    public function logout(){
        session()->remove('id');
        session()->remove('admin');
        session(['logado' => 'false']);
        return view('home');
    }

}
