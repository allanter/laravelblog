@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    
    <div>
        {!!$post->body!!}
        <!-- using exclamanation marks to parse the <p>html script</p> in 'Source' in Editor --> 
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    <!-- Edit function-->

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => "POST", 'class' => 'float-right'])!!}

        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    <!-- adding the delete function and btn -->    

    {!!Form::close() !!}
@endsection