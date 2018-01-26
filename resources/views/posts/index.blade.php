@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class='well'>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    
                @if($post->cover_image != 'noimage.jpg')
                    <img style="width:30vh"
                    src="http://localhost:8080/lsapp/public/storage/cover_images/{{ $post->cover_image }}">
                @endif
                </div>
                
                <div class="col-md-8 col-sm-8">
                    <h3><a href="posts/{{$post->id}}">{{ $post->title }}</a></h3>
                    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                </div>
            </div>
            
        </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found!</p>
    @endif
@endsection