<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- adding the css file in bootstrap and everthing compiled -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>{{config('app.name', 'LSAPP')}}</title>

    </head>
    <body>
        @include('inc.navbar')

        <div class="container">

            @include('inc.messages') <!-- to link it to our messages.blade file -->
            @yield('content')

        </div>

        <!-- installed laravel blade extension, so no need to keep using html template-->
    </body>
</html>
