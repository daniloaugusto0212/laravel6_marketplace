@extends('layouts.app')

@section('content')
    <h1>Criar Loja</h1>
    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label>Nome Loja:</label>
            <input class="form-control" type="text" name="name" value="{{$store->name}}">
        </div>
        <div class="form-group">
            <label>Descrição: </label>
            <input class="form-control" type="text" name="description" value="{{$store->description}}">
        </div>
        <div class="form-group">
            <label>Telefone: </label>
            <input class="form-control" type="text" name="phone" value="{{$store->phone}}">
        </div>
        <div class="form-group">
            <label>Celular/Whatsapp: </label>
            <input class="form-control" type="text" name="mobile_phone" value="{{$store->mobile_phone}}">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" type="text" name="slug" value="{{$store->slug}}">
        </div>

        <div class="form-group">
            <button class="btn btn-lg btn-success" type="submit">Atualizar Loja</button>
        </div>
    </form>

@endsection
