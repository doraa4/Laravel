@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Predstvljamo vam najboje destinacije za posetiti.</p>
        <p>Poslušajte naše savete i sigurno nećete zažaliti.</p>
        <p>Garantujemo dobar provod i prelepe uspomene!</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection