<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8">
    <title>SADC - @yield('titulo')</title>


    {{-- Protecção contra clickJacking --}}
    {!! header('X-Frame-Options: SAMEORIGIN') !!}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="SADC Comunidade de Desenvolvimento da África Austral">
    <meta name="keywords" content="Comunidade de Desenvolvimento da África Austral, SADC">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="SADC Comunidade de Desenvolvimento da África Austral" />
    <meta property="og:site_name" content="SADC Comunidade de Desenvolvimento da África Austral" />
    <meta property="og:description" content="SADC Comunidade de Desenvolvimento da África Austral" />
    <meta property="og:type" content="article" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fav and touch icons -->
    <link href="/site/images/favicon.png" rel="shortcut icon" />
    <script>
        console.log(window.innerWidthw);
        if (window.innerWidth <= 800 && window.innerHeight <= 600) {
            document.getElementById("mobil").style.visibility = "visible";
            document.getElementById("desktop").style.visibility = "hidden";
        } else
            document.getElementById("mobil").style.visibility = "hidden";
        document.getElementById("desktop").style.visibility = "visible";
    </script>

    
    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>


    <!-- ===== All CSS files ===== -->
    <link rel=manifest href="/site/images/icons/favicons/site.webmanifest">
    <link rel=mask-icon href="/site/images/icons/favicons/safari-pinned-tab.svg" color=#232323>
    <meta name=msapplication-TileColor content=#ffffff>
    <meta name=theme-color content=#ffffff>
    <link href="/site/css/theme.min.css" rel=stylesheet>
    <link href="/site/css/style.css" rel=stylesheet>
    <link href="/site/css/main.css" rel=stylesheet>

    <link href="/site/css/frontend.min.css" rel=stylesheet>

    {!! RecaptchaV3::initJs() !!}

    @yield('CSSJS')


</head>

<body>

    @include('extra._translate.index')
