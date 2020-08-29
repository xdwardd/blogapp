@extends('layouts.app')
    @section('content')
    <a class="btn btn-secondary text-white mt-2" href="/posts">Go Back</a>
    <div>
        
     <h1 class="mt-2">{{$post->title}}</h1>
        <img style = "width:100%" src="/storage/cover_images/{{$post->cover_image}}">
     <div>
         <br>
        {!!$post->body!!}
    </div>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    </div>
     <hr>

     @if(!Auth::guest())
        @if(Auth::user()->id == $post->user->id)
            <a class="btn btn-warning mb-2" href="/posts/{{$post->id}}/edit">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger mb-2'])}}

            {!!Form::close()!!}
     @endif
    @endif
    @endsection