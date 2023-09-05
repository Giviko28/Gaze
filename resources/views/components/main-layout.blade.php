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
    <x-navbar />
    {{ $slot }}
</body>
</html>
