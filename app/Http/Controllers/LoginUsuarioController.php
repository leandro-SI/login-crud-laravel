<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use App\Usuarios;
use Auth;

class LoginUsuarioController extends Controller
{
    public function RegistroUsuario(Request $request) 
    {
        $validacao = Validator::make($request->all(),
        [
            'nome' => 'required|max:100',
            'email' => 'email|unique:usuarios',
        ]);

        if ($validacao->fails())
        {
            return redirect('/#register')
                ->withInput()
                ->withErrors($validacao);
        }

        $user = new Usuarios();
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/');

    }

    public function LoginUsuario()
    {
        $credenciais = $this->validate(request(),
        [
            'email' => 'email',
            'password' => 'min:6'
        ]);

        if (Auth::attempt($credenciais))
        {
            return redirect('/produtos');
        }
        else
        {
            return back()
                ->withErrors(['email'=>trans('auth.failed')])
                ->withInput(request(['email']));
        }
    }
}
