<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaze</title>
    @vite('resources/css/app.css')
</head>
<body class="min-w-[320px] min-h-screen pt-6 px-12 md:pt-8 md:px-16">
    <!-- wrapper div  -->
    <div class="relative">
        <nav class="flex justify-between items-center whitespace-nowrap">
            <!-- left side of navbar -->
            <div class="flex items-center">
                <x-application-logo class="h-16 w-16" />
                <div class="hidden md:block border-l-2 border-first my-4 mx-4">&nbsp;</div>

                <div class="hidden space-x-2 text-fourth md:block ">
                    <a href="/dashboard">Dashboard</a>
                    <a href="">Services</a>
                    <a href="">About</a>
                    <a href="">Contact Us</a>
                </div>
            </div>
            <!-- right of navbar -->
            <div class="space-x-6 items-center flex text-fourth">
                <img id="menuButton" class="md:hidden" src="{{ asset('images/svg/menu.svg') }}" alt="">
                @auth
                    <button class="rounded-xl border px-2.5 py-1.5 border-sky-400 hover:text-white hover:bg-sky-400 hover:duration-300">Logout</button>
                @else
                    <a href="/login" class="hidden md:block text-third">Login</a>
                    <a href="/register" class="hidden md:block rounded-xl border-2 px-2.5 py-1.5 border-first text-third hover:border-white hover:text-white hover:bg-third hover:duration-300">Sign Up</a>
                @endauth
            </div>
        </nav>
        <!-- mobile navbar -->
        <div id="mobile-navbar" class="hidden text-gray-700 w-full absolute md:hidden flex flex-col space-y-4 mt-4 items-center">
            <a href="">Dashboard</a>
            <a href="">Services</a>
            <a href="">About</a>
            <a href="">Contact Us</a>
        </div>
        <script src="{{ asset('js/navbar.js') }}"></script>
    </div>

    <main>
        <!-- Display --->
        <div class="lg:px-20 px-6 flex-col md:flex-row md:flex py-12 space-y-6 md:space-y-0 bg-gradient-to-b from-white via-gray-50 to-purple-50">
            <!-- Left side -->
            <div class="flex flex-col items-center w-full md:w-1/2 justify-center">
                <div class="space-y-8">
                    <p class="text-third font-semibold">SIGN IN TO START GAZING!</p>
                    <p class="text-fourth text-6xl">Keep track of all the items you want in just a few clicks</p>
                    <p class="text-fourth">All items from your wishlist in one place - from Amazon and BestBuy to Target and Walmart</p>

                    <div class="flex space-x-2">
                        <input class="md:flex-grow-0 md:flex-1" type="text" placeholder="Your email address">
                        <button class="md:block rounded-md border-2 border-third px-3.5 py-1.5 bg-third text-white">Get Started</button>
                    </div>
                </div>
            </div>
            <!-- Right side -->
            <div class="md:w-1/2">
                <img class="object-cover w-full h-96" src="{{ asset('images/landing3.png') }}" alt="Cool image">
            </div>
        </div>
        <!-- Extra Info -->
        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 gap-8 px-8 py-6">
            <div class="p-4 space-y-1.5 flex flex-col justify-center items-center">
                <p class="text-6xl md:text-4xl text-fourth font-semibold">1 million</p>
                <p class="text-xl md:text-base text-fourth font-light">Product on watchlist</p>
            </div>
            <div class="p-4 space-y-1.5 flex flex-col justify-center items-center">
                <div class="space-x-2 flex items-center">
                    <p class="text-6xl md:text-4xl text-fourth font-semibold">50+</p>
                    <span class="bg-third p-1.5 rounded-xl text-white">counting...</span>
                </div>
                <p class="text-xl md:text-base text-fourth font-light">Websites supported</p>
            </div>
            <div class="p-4 space-y-1.5 flex flex-col justify-center items-center">
                <p class="text-6xl md:text-4xl text-fourth font-semibold">1 platform</p>
                <p class="text-xl md:text-base text-fourth font-light">Instead of all</p>
            </div>
        </div>
    </main>
</body>
</html>
