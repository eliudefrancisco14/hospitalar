<!DOCTYPE html>
<html lang="pt">

<head>
    @include('layouts._includes.site.Header')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('layouts._includes.site.Menu')
    <!-- End Header -->

    <!-- main -->

    @yield('content')

    <!-- End #main -->

    @include('layouts._includes.site.Footer')

</body>

</html>
