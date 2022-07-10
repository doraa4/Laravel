@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <p>Explorers Vam nudi predloge destinacija koje treba posetiti. Nećete ostati ni bez objašnjenja zašto želimo da Vas pošaljemo tamo. Priložićemo i slike određenih znamenitosti i prirodnih bogatstava koje možete videti na destinacama na koje Vas šaljemo.</p>
    <p>Sa ciljem da se što bolje provedete i da uživate u slobodnim danima koje ste mučki zaradili na poslu, daćemo sve od sebe da naši predlozi budu baš ono što tražite.</p>
    <p>Kontinenti koje predlažemo:
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection