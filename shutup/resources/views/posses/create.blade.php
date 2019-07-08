@extends('layouts.app')

@section('titulo', 'Inserir Usuario')

@section('content')

    <form class="form-group" method="post" action="{{route('posses.store')}}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="form-text">Colecionavel <select class="form-control" name="colecionavel_id">
                            <option value="">Selecione</option>
                            @foreach(\App\Colecionavel::all() as $c)
                                <option value="{{$c->id}}">{{$c->nome}}/{{$c->linha}}/{{$c->tema}}</option>
                            @endforeach
                        </select></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="form-text">Usuario <select class="form-control" name="user_id">
                            <option value="">Selecione</option>
                            @foreach(\App\User::all() as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="form-text">Data de Compra <input class="form-control" type="date" name="data"></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="form-text">Valor de compra <input class="form-control" type="text" name="valor"></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">
                </div>
            </div>

        </div>

    </form>


@endsection