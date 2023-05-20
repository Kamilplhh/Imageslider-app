<html>

<head>
    <title>ImageSlider @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    @vite('resources/js/app.js')
</head>

<body>
    @vite('resources/js/app.js')
    @section('navbar')
    <div class="navbar dark:bg-[#313131] px-12 py-10">
        <div class="absolute top-6 right-12">
            <a href="" class="home px-7 text-black dark:text-white ">HOME</a>
            <a href="" class="px-7 text-black dark:text-white">HOLIDAYS</a>
            <a href="" class="px-7 text-black dark:text-white">RESERVATIONS</a>
            <a href="" class="px-7 text-black dark:text-white">FLIGHTS</a>
            <a href="" class="px-7 text-black dark:text-white">CONTACT</a>
            <i class="px-14 sun fa-regular fa-eye fa-xl" style="color: #ffffff;"></i>
            <i class="px-14 moon fa-solid fa-eye fa-xl" style="color: #000000;"></i>
        </div>
    </div>

    @show
    <div class="content">

        @yield('content')

    </div>
</body>

</html>