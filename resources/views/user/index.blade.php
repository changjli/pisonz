<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pisonz Store</title>
    <link rel="stylesheet" href="{{ asset('css/final.css') }}" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="border-gray-200 bg-primary sticky top-0 z-[9999] shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.html" class="flex items-center">
                <img src="assets/logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-50 rounded-lg md:hidden hover:scale-105 active:scale-95 transition-all duration-150"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 text-white md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 text-center">
                    <li>
                        <a href="index.html"
                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-300 md:p-0 text-white hover:text-dark"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="tracking.html"
                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-300 md:p-0 text-white hover:text-dark">Tracking
                            Order</a>
                    </li>
                    <li>
                        <a href="index.html?#games"
                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-300 md:p-0 text-white hover:text-dark">Games</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Slider Start -->
    <div id="default-carousel" class="relative md:w-3/4 md:mt-3 mx-auto rounded-none" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-40 overflow-hidden md:rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/event.webp"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-3/4 left-1/2" alt="event" />
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/event.webp"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-3/4 left-1/2" alt="event" />
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/event.webp"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-3/4 left-1/2" alt="event" />
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- Slider End -->

    <!-- Games Start -->
    <section class="md:w-3/4 mx-auto md:mt-20 p-2" id="games">
        <div>
            <h1 class="text-2xl font-semibold my-2">Games</h1>
            <div class="w-full h-[.5px] bg-primary relative">
                <div class="w-20 h-1 bg-dark absolute"></div>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            @foreach ($games as $game)
                <div class="overflow-hidden rounded-lg">
                    <a href="/order/{{ $game->id }}">
                        <img class="h-auto max-w-full hover:scale-105 transition-transform"
                            src="assets/games/compressed/pubg.jpg" alt="pubg" />
                    </a>
                </div>
            @endforeach

            {{-- <div class="overflow-hidden rounded-lg">
                <a href="order.html" target="_blank">
                    <img class="h-auto max-w-full hover:scale-105 transition-transform"
                        src="assets/games/compressed/ml.jpg" alt="ml" />
                </a>
            </div>
            <div class="overflow-hidden rounded-lg">
                <a href="order.html" target="_blank">
                    <img class="h-auto max-w-full hover:scale-105 transition-transform"
                        src="assets/games/compressed/genshin.jpg" alt="genshin" />
                </a>
            </div>
            <div class="overflow-hidden rounded-lg">
                <a href="order.html" target="_blank">
                    <img class="h-auto max-w-full hover:scale-105 transition-transform"
                        src="assets/games/compressed/ff.jpg" alt="ff" />
                </a>
            </div> --}}
            <div>
                <img class="h-auto max-w-full rounded-lg" src="assets/games/compressed/cs.jpg" alt="cs" />
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="assets/games/compressed/cs.jpg" alt="cs" />
            </div>
        </div>
    </section>
    <!-- Games End -->

    <footer class="bg-primary mt-60 flex justify-center flex-col items-center text-white">
        <img src="assets/logo.png" class="w-16 h-10 my-3" alt="" />
        <h1 class="text-2xl font-semibold">Semua Ada, Semua Murah</h1>
        <h2>Payments</h2>
        <div class="bg-teal-300 flex gap-5 p-3 min-w-full justify-center md:gap-10 my-3">
            <img src="assets/footer/BRI.png" class="md:h-6 h-3" alt="BRI" />
            <img src="assets/footer/OVO.png" class="md:h-6 h-3" alt="OVO" />
            <img src="assets/footer/BCA.png" class="md:h-6 h-3" alt="BCA" />
            <img src="assets/footer/Shopeepay.png" class="md:h-6 h-3" alt="Shopeepay" />
            <img src="assets/footer/Gopay.png" class="md:h-6 h-3" alt="Gopay" />
            <img src="assets/footer/DANA.png" class="md:h-6 h-3" alt="DANA" />
        </div>

        <h2>Follow Us</h2>
        <div class="flex justify-center items-center my-3 gap-5">
            <div>
                <img src="assets/footer/contact/ig.png" class="mx-auto" alt="" />
                <p class="text-[.8rem]">pisonz.store</p>
            </div>
            <div>
                <img src="assets/footer/contact/wa.png" class="mx-auto" alt="" />
                <p class="text-[.8rem]">+6281363512273</p>
            </div>
        </div>

        <h1>Copyright 2023 PizonsStore. All Right Reserved</h1>
    </footer>

    <!-- Flowbite -->
    <script src="{{ asset('js/flowbite.min.js') }}"></script>
</body>

</html>
