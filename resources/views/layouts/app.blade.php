<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Aplicación de finanzas personales" name="description">
    <meta content="Falk Franco" name="author">
    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo.ico') }}">
    @include('partials.head')
</head>

@yield('body')

@auth
    @include('partials.navbar')
@endauth



@yield('content')


@auth
    @include('partials.footer')
@endauth


<!-- JAVASCRIPT -->
@include('partials.vendor-scripts')


</html>
