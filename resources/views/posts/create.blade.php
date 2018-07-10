@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <!-- add forms here, after installing laravel collective, providers & aliases-->

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <!-- use 'action' instead of url, direct to 'store' function in PC, then describe the method => 'POST' -->
    
        <div class="form-group">
            
            {{Form::label('title', 'Title')}} 
            <!-- label of 'title', with actual 'Title' -->

            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            <!-- form without any value '', with class. -->
        </div>

        <div class="form-group">
            
                {{Form::label('body', 'Body')}}

                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
                <!-- Body-->
        </div>

        {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
        <!-- will submit to 'store' when clicked -->

    {!! Form::close() !!}

@endsection