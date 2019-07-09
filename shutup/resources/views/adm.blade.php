@extends('layouts.app')

@section('content')



    <div class="container">

        <div class="row">
            <div class="col">
                <h1 class="text-primary" style="text-align: center">Administração</h1>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <a class="btn  btn-sm btn-primary" href="{{route('colecionaveis.index')}}">Colecionaveis</a>
            </div>

            <div class="col-sm">
                <a class="btn  btn-sm btn-primary" href="{{route('users.index')}}">Usuarios</a>
            </div>

            <div class="col-sm">
                <a class="btn  btn-sm btn-primary" href="{{route('ofertas.index')}}">Ofertas</a>
            </div>

            <div class="col-sm">
                <a class="btn  btn-sm btn-primary" href="{{route('posses.index')}}">Posses</a>
            </div>

        </div>
    </div>

@endsection
