@extends('layouts.app')

@section('content')
    <h1>Projekti</h1>
    
    @if (count($projects) > 0)
    @foreach ($projects as $project)
        <div class = "card">
            <div class="card-body">
            <h3 class="card-title"><a href = "/projects/{{$project->id}}">{{$project->projectName}}</a></h3>
             <small>Written on {{$project->created_at}} by {{$project->user->name}}</small>
        </div>
    </div>
    <br>
    @endforeach
    {{$projects->links()}}
    @else
        <p>Nema pronađenih projekata</p>
    @endif
@endsection