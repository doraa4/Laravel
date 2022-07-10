@extends('layouts.app')

@section('content')
    <h1>Kreiraj objavu</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'mulipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Naslov')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Naslov'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Sadržaj')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Sadržaj'])}}
        </div>
        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
              Slika
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
    
            @error('logo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
        {{Form::submit('Potrvdi', ['class' => 'btn btn-primary'])}}
        
    {!! Form::close() !!}

@endsection