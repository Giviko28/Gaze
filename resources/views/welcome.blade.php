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
    <nav class="flex justify-between items-center whitespace-nowrap">
        <div class="flex items-center">
            <img class="h-16 w-16" src="{{ asset('images/gaze.png') }}" alt="Logo">
            <div class="hidden md:block border-l-2 border-slate-300 my-4 mx-4">&nbsp;</div>

            <div class="hidden space-x-2 text-gray-700 md:block">
                <a href="">Dashboard</a>
                <a href="">Services</a>
                <a href="">About</a>
                <a href="">Contact Us</a>
            </div>
        </div>
        <div class="space-x-6 items-center flex">
            <img class="md:hidden" src="{{ asset('images/svg/menu.svg') }}" alt="">
            @auth
                <button class="rounded-xl border px-2.5 py-1.5 border-sky-400 hover:text-white hover:bg-sky-400 hover:duration-300">Logout</button>
            @else
                <a href="/login" class="hidden md:block">Login</a>
                <a href="/register" class="hidden md:block rounded-xl border-2 px-2.5 py-1.5 border-sky-400 hover:text-white hover:bg-sky-400 hover:duration-300">Sign Up</a>
            @endauth
        </div>
    </nav>
</body>
</html>
