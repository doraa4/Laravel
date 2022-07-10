@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default"> Nazad </a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} <span class="cat-links">
        user {{ $post->user->name ?? 'None' }}
    </span></small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Izmeni </a>

            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Obriši', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
       
@endsection