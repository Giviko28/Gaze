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
<body id="body" class="hidden flex">
    <nav id="myNavbar" class="h-screen bg-third text-white">
        <x-dash-link active="{{ request()->routeIs('dashboard') }}" href="/" link="{{ asset('images/svg/home.svg') }}"/>
        <x-dash-link link="{{ asset('images/svg/add.svg') }}"/>
        <x-dash-link link="{{ asset('images/svg/bell.svg') }}"/>
        <x-dash-link link="{{ asset('images/svg/settings.svg') }}"/>
    </nav>
    <main id="myMain" class="w-full py-6 flex flex-col items-center">
        <div class="">
            <h1>My watchlist</h1>
        </div>
        <div>
            <form class="flex flex-col space-y-4" method="post">
                @csrf
                <select name="store">
                    <option value="" selected disabled>Select ur store</option>
                    <option value="1">Amazon</option>
                    <option value="2">Newegg</option>
                </select>
                <input name="url" type="text" placeholder="URL">
                <input name="name" type="text" placeholder="Name">
                <button type="submit">Submit</button>
            </form>
        </div>
        <div>
            <table class="max-w-6xl">
                <tr>
                    <th class="border-2 p-4">Store</th>
                    <th class="border-2 p-4">URL</th>
                    <th class="border-2 p-4">Name</th>
                    <th class="border-2 p-4">Status</th>
                </tr>
                @if(isset($items))
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td class="max-w-2xl overflow-hidden">{{ $item->url }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->updateStatus() }}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </main>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
