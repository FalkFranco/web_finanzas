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

<body data-layout="horizontal">

    <!-- Estructura para cuando esta logeado -->
    @auth
        <div id="layout-wrapper">
            @include('partials.topbar')
            @include('partials.sidebar')

            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                @include('partials.footer')
            </div>
        </div>
    @endauth

    <!-- Contenido de la pagina de incio "Landing" y el de inicio de sesion y registro  -->
    @yield('content_landing')

    <!-- JAVASCRIPT -->
    @include('partials.vendor-scripts')

</html>
