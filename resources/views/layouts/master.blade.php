<html>

<head>
    <title>ImageSlider @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    @vite('resources/js/app.js')
</head>

<body>
    @vite('resources/js/app.js')
    @section('navbar')


    @show
    <div class="content">
        
        @yield('content')
        
    </div>     
</body>

</html>