<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function login()
  {
    return view('welcome');
  }

  public function novousuario()
  {
    return view('auth.novousuario');
  }


public function auth(Request $request)
{

    $this->validate(
        $request, [
            'email'     => 'required',
            'password'  => 'required'
        ],[
            'email.required' => 'Email é obrigatório',
            'password.required' => 'Senha é obrigatória'
        ]);




        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'admin' => 0]))
        {
            dd('Logado como responsavel ');
        } else {
            //Redireciona para rota anterior
            return redirect()->back()->with('danger','E-mail ou Senha inválida');

        }
}



}
