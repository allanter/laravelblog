@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <!-- add forms here, after installing laravel collective, providers & aliases-->

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <!-- use 'action' instead of url, direct to 'store' function in PC, then describe the method => 'POST' -->
    
        <div class="form-group">
            
            {{Form::label('title', 'Title')}} 
            <!-- label of 'title', with actual 'Title' -->

            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            <!-- form without any value '', with class. -->
        </div>

        <div class="form-group">
            
                {{Form::label('body', 'Body')}}

                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                <!-- Body-->
                <!-- Added 'id' => 'ckeditor' into array to enable editor in body-->
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
            <!-- everytime when adding upload file, need this function and 'enctype' -->
        </div>

        {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
        <!-- will submit to 'store' when clicked -->

    {!! Form::close() !!}

@endsection