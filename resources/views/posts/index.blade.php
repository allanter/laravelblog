@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
    <!-- if $post array count is > 0 -->

        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                <!-- churn date and written by specific user -->
            </div>
        @endforeach
            {{$posts->links()}}
            <!-- for pagination -->
    @else
        <p>No Posts Found</p>

    @endif
@endsection