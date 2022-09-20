<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    @stack('style')
</head>
<body>
    @yield('breadcrumbs')

    @yield('content')

    @section('footer')
        main footer
    @show

    <script>// main</script>

    @stack('customScript')
</body>
</html>