@extends('layouts.app')

@section('titulo', 'Inserir Colecionavel')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form class="form-group" method="post" action="{{route('colecionaveis.update', $colecionavel->id)}}">
                    @csrf
                    @method('PATCH')
                    <p class="form-text">Nome: <input class="form-control" type="text" name="nome" value="{{$colecionavel->nome}}"></p>
                    <p class="form-text">Linha:<input class="form-control" type="text" name="linha" value="{{$colecionavel->linha}}"></p>
                    <p class="form-text">Tema:<input class="form-control" type="text" name="tema" value="{{$colecionavel->tema}}"></p>
                    <p class="form-text">Edição:<input class="form-control" type="text" name="edicao" value="{{$colecionavel->edicao}}"></p>
                    <p class="form-text">Estado de Produção:<input class="form-control" type="text" name="status_prod" value="{{$colecionavel->status_prod}}"></p>
                    <p class="form-text">Cor do Cabelo:<input class="form-control" type="text" name="cor_cabelo" value="{{$colecionavel->cor_cabelo}}"></p>
                    <p class="form-text">Cor dos Olhos:<input class="form-control" type="text" name="cor_olhos" value="{{$colecionavel->cor_olhos}}"></p>
                    <p class="form-text">Cor das Vestimentas:<input class="form-control" type="text" name="cor_vestimentas"value="{{$colecionavel->cor_vestimentas}}"></p>


                    <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">
                </form>
            </div>
        </div>
    </div>



@endsection