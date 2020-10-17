@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>
<form action="{{route('admin.products.store')}}" method="post">
        <input class="form-control" type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label>Nome Produto:</label>
            <input class="form-control" type="text" name="name" id="">
        </div>
        <div class="form-group">
            <label>Descrição: </label>
            <input class="form-control" type="text" name="description" id="">
        </div>
        <div class="form-group">
            <label>Conteúdo: </label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Preço: </label>
            <input class="form-control" type="text" name="price" id="">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" type="text" name="slug" id="">
        </div>
        <div class="form-group">
            <label>Lojas</label>
            <select class="form-control" name="store" id="">
                @foreach ($stores as $store)
                    <option value="{{$store->id}}">{{$store->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-success" type="submit">Criar Produto</button>
        </div>
    </form>

@endsection
