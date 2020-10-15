@extends('app', ["current" => "produtos"])

@section('body')

<div >
    <h2>Novo Produto</h2>
    <form action="/produtos" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" name="codigo" id="codigo">
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" class="form-control" name="preco" id="preco">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" name="quantidade" id="quantidade">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
    </form>
</div>
    
@endsection