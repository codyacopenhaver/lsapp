@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="http://localhost:8080/lsapp/public/posts/">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <img style="width:30vh" 
    src="http://localhost:8080/lsapp/public/storage/cover_images/{{ $post->cover_image }}">
    <br><br>
        <div class='well'>
            <h3>{{ $post->title }}</h3>
            <p>{!! $post->body !!}</p>
        </div>
        <hr>
        <small>Written on {{ $post->created_at}} by {{ $post->user->name }}</small>
        <hr>
        @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="http://localhost:8080/lsapp/public/posts/{{$post->id}}/edit"
             class="btn btn-default">Edit</a>

        {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST',
        'class' => 'pull-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
        @endif
        @endif
@endsection