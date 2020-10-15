@extends('app', ["current" => "produtos"])

@section('body')
    <div class="card broder">
        <div class="card-body">
            <h2>Produtos</h2>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Código</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prods as $produto)
                        <tr>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->codigo}}</td>
                            <td>{{$produto->preco}}</td>
                            <td>{{$produto->quantidade}}</td>
                            <td>
                                <a href="/produtos/editar/{{$produto->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/produtos/apagar/{{$produto->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
    </div>

@endsection