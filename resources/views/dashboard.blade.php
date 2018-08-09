@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>

                    <h3>Your Blog Posts </h3>

                    @if(COUNT($posts) > 0 )
                    <!-- doing a conditional loop, if there are no posts -->
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</td>
                                
                                    <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => "POST", 'class' => 'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        <!-- adding the delete function and btn -->    
                                    {!!Form::close() !!}
                                </td>
                            </tr>

                        @endforeach
                    </table>
                    @else
                        <p>You have no Posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
