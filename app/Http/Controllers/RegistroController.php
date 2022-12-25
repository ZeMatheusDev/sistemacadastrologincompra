<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function cadastrar(Request $request){
        try{
            $user = new User();
            $user->login = $request->login;
            $user->email = $request->email;
            $user->password = $request->senha;
            $user->admin = false;
            $user->save();
            return redirect()->back()->with('funcionou', 'Cadastrado com sucesso');
        }catch(\Exception $e){
            return redirect()->back()->with('error', 'Algo deu errado, verifique o login ou senha digitados.');
        }


    }
}
