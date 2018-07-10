@extends('layouts.app') 

<!-- installed laravel blade extension, so no need to keep using html template-->

@section('content')
<div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel application from the "Laravel From Scratch" Youtube series</p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">register</a>
    </div>

@endsection