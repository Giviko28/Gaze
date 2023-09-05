<x-main-layout>
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
                    <p id="count" class="text-6xl md:text-4xl text-fourth font-semibold">0</p>
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
    <script src="{{ asset('js/welcome.js') }}"></script>
</x-main-layout>

