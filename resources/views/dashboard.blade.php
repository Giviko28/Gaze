<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="flex">
    <nav class="fixed left-0 h-full bg-third text-white">
        <x-dash-link active="{{ request()->routeIs('dashboard') }}" href="/" link="{{ asset('images/svg/home.svg') }}"/>
        <x-dash-link link="{{ asset('images/svg/add.svg') }}"/>
        <x-dash-link link="{{ asset('images/svg/bell.svg') }}"/>
        <x-dash-link link="{{ asset('images/svg/settings.svg') }}"/>
    </nav>
    <main>
        <div>
            
        </div>
    </main>
</body>
</html>
