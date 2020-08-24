<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
    <body>
        @component('layouts.component.navbar')
        @slot('version')
            Laravel 5.8

        @endslot

        @endcomponent
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    @section('left')
                    left
                    @show
                </div>
                @include('flash-message')
                <div class="col-sm">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
