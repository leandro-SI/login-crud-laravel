@extends('app', ["current" => "produtos"])

@section('body')

<div >
    <h2>Editar Produto</h2>
    <form action="/produtos/{{$prod->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$prod->nome}}">
        </div>
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" name="codigo" id="codigo" value="{{$prod->codigo}}">
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" class="form-control" name="preco" id="preco" value="{{$prod->preco}}">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" name="quantidade" id="quantidade" value="{{$prod->quantidade}}">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
    </form>
</div>
    
@endsection