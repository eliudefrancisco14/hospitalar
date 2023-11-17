<!DOCTYPE html>
<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <title>@yield('title', 'Assistente Virtual')</title>
    @include('layouts._includes.dashboard.Header')
</head>

<body>
    @include('layouts._includes.dashboard.Aside')
    
    @yield('content')
    @include('layouts._includes.dashboard.Footer')
</body>

</html>
