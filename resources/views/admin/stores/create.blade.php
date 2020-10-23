@extends('layouts.app')

@section('content')
    <h1>Criar Loja</h1>
    <form action="{{route('admin.stores.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label>Nome Loja:</label>
            <input class="form-control" type="text" name="name" id="">
        </div>
        <div class="form-group">
            <label>Descrição: </label>
            <input class="form-control" type="text" name="description" id="">
        </div>
        <div class="form-group">
            <label>Telefone: </label>
            <input class="form-control" type="text" name="phone" id="">
        </div>
        <div class="form-group">
            <label>Celular/Whatsapp: </label>
            <input class="form-control" type="text" name="mobile_phone" id="">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" type="text" name="slug" id="">
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-success" type="submit">Criar Loja</button>
        </div>
    </form>

@endsection
