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
