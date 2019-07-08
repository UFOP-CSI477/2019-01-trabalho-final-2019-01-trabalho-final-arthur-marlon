@extends('layouts.app')

@section('content')
    <style>

        @media (min-width: 768px) {
        }

        body {
            /background-image: url('{{ asset('assets/background.jpeg')}}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;

        }
    </style>

    <body class="text-center" style="background-image: url('{{ asset('assets/background.jpeg')}}')">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                    <h3 class="masthead-brand">Shut Up And Take My Money</h3>
{{--                    <nav class="nav nav-masthead justify-content-center ">--}}
{{--                        <a class="nav-link active" href="#">Home</a>--}}
{{--                        <a class="nav-link" href="#">Features</a>--}}
{{--                        <a class="nav-link" href="#">Contact</a>--}}
{{--                    </nav>--}}
                </div>
            </header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading">Troque seu Colecionavel</h1>
                <p class="lead">Shut Up And Take My Money é o lugar para você, fã da linha funko, trocar seu
                    colecionavel!</p>
{{--                <p class="lead">--}}
{{--                    <a href="{{ route('login') }}" class="btn btn-lg btn-secondary">Login</a>--}}
{{--                    <a href="{{ route('login') }}" class="btn btn-lg btn-secondary">Registre-se</a>--}}
{{--                </p>--}}
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                </div>
            </footer>
        </div>
@endsection
