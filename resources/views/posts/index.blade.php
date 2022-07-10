@extends('layouts.app')

@section('content')
    <h1>Objave</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} <span class="cat-links">
                    user {{ $post->user->name ?? 'None' }}
                </span></small>
            </div>
        
        @endforeach
        {{$posts->links()}}
    @else
        <p>Nije pronadjena nijedna objava</p>
    @endif
       
@endsection