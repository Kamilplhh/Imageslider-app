<html>

<head>
    <title>ImageSlider @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>

<body>
    @vite('resources/js/app.js')

    <div class="block h-100 bg-[#ecfdf3]">
        
    <div class="navbar dark:bg-[#313131] dark:bg-opacity-30 h-16">
        <div class="absolute top-8 right-12">
            <a href="" class="home px-5 text-black dark:text-white ">HOME</a>
            <a href="" class="px-5 text-black dark:text-white">HOLIDAYS</a>
            <a href="" class="px-5 text-black dark:text-white">RESERVATIONS</a>
            <a href="" class="px-5 text-black dark:text-white">FLIGHTS</a>
            <a href="" class="px-5 text-black dark:text-white">CONTACT</a>
            <i class="px-14 sun fa-regular fa-eye fa-xl" style="color: #ffffff;"></i>
            <i class="px-14 moon fa-solid fa-eye fa-xl" style="color: #000000;"></i>
        </div>
    </div>
        @yield('content')
        

    </div>
</body>

</html>