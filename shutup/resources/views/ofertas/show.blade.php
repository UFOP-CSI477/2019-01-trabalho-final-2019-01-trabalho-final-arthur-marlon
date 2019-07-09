@extends('layouts.app')

@section('titulo', 'Oferta')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col">
                
                <h1>Colecionavel: {{$oferta->colecionavel->nome}}</h1>
                <p>Dono: <a href="{{route('users.show', $oferta->user_id)}}">{{$oferta->user->name}}</a></p>
                <p>Linha: {{$oferta->colecionavel->linha}}</p>
                <p>Valor: {{$oferta->valor}}</p>
                <p>Estado: {{$oferta->estado}}</p>
                <p>Tema: {{$oferta->colecionavel->tema}}</p>
                <p>Edição{{$oferta->colecionavel->edicao}}</p>
                <p>Estado de Produção: {{$oferta->colecionavel->status_prod}}</p>
                <p>Cor do Cabelo: {{$oferta->colecionavel->cor_cabelo}}</p>
                <p>Cor dos Olhos{{$oferta->colecionavel->cor_olhos}}</p>
                <p>Cor das Vestimentas{{$oferta->colecionavel->cor_vestimentas}}</p>
                
            </div>
        </div>

        <div class="row">
            <div class="col">

                <a class="btn  btn-sm btn-primary" href="{{route('ofertas.index')}}">Voltar</a>

            </div>

            @if(\Illuminate\Support\Facades\Auth::user()->id == 1 || $oferta->user_id == \Illuminate\Support\Facades\Auth::user()->id)
                <div class="col">

                    <a class="btn btn-sm btn-primary" href="{{route('users.edit', $oferta->id)}}">Editar</a>

                </div>

                <div class="col">

                    <form method="post" action="{{route('users.destroy', $oferta->id)}}"
                          onsubmit="return confirm('Deseja realmente excluir?');">
                        @csrf
                        @method('DELETE')
                        <input class="btn  btn-sm btn-primary" type="submit" value="Excluir">
                    </form>
                </div>
            @endif

        </div>
    </div>

@endsection