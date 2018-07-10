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
    </hr>
@endsection