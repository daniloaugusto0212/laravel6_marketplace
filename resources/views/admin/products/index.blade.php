@extends('layouts.app')

@section('content')
    <div class="btn">
        <a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Criar Produto</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>
                        <a href="{{route('admin.products.edit', ['product' => $product->id])}}" class="btn btn-sm btn-warning">EDITAR</a>
                        <a href="{{route('admin.products.destroy', ['product' => $product->id])}}" class="btn btn-sm btn-danger">DELETAR</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$products->links()}}
@endsection
