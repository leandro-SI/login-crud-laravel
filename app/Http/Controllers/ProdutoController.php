<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Produtos;

class ProdutoController extends Controller
{

    public function verificarLogin()
    {
        if (Auth::check())
        {
            $user = Auth::user();
        }
        else
        {
            redirect('/registrar');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ProdutoController::verificarLogin();

        $prods = Produtos::all();

        return view('index', compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ProdutoController::verificarLogin();
        return view('novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProdutoController::verificarLogin();
        $prod = new Produtos();
        $prod->nome = $request->input('nome');
        $prod->codigo = $request->input('codigo');
        $prod->preco = $request->input('preco');
        $prod->quantidade = $request->input('quantidade');
        $prod->usuario_id = Auth::user()->id;
        $prod->save();

        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ProdutoController::verificarLogin();

        $prod = Produtos::find($id);

        if (isset($id))
        {
            return view('editar', compact('prod'));
        }
        return redirect('/produtos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ProdutoController::verificarLogin();

        $produto = Produtos::find($id);

        if (isset($produto))
        {   
            $produto->nome = $request->input('nome');
            $produto->codigo = $request->input('codigo');
            $produto->preco = $request->input('preco');
            $produto->quantidade = $request->input('quantidade');
            $produto->save();
        }

        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProdutoController::verificarLogin();
        
        $prod = Produtos::find($id);

        if (isset($id))
        {
            $prod->delete();
        }
        return redirect('/produtos');
    }
}
