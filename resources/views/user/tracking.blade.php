<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tracking Order</title>
    <link rel="stylesheet" href="{{ asset('css/final.css') }}" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="border-gray-200 bg-primary sticky top-0 z-[9999] shadow-lg">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <a href="index.html" class="flex items-center">
                <img src="assets/logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm transition-all duration-150 rounded-lg text-gray-50 md:hidden hover:scale-105 active:scale-95"
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
                    class="flex flex-col p-4 mt-4 font-medium text-center text-white border rounded-lg md:p-0 md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="index.html"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-300 md:p-0 hover:text-dark"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="tracking.html"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-300 md:p-0 hover:text-dark">Tracking
                            Order</a>
                    </li>
                    <li>
                        <a href="index.html?#games"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-300 md:p-0 hover:text-dark">Games</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Tracking Start -->
    <section class="p-2 mx-auto mt-5 md:w-3/4 md:mt-20">
        <div>
            <h1 class="my-2 text-2xl font-semibold">Track Your Order</h1>
            <div class="w-full h-[.5px] bg-primary relative">
                <div class="absolute w-48 h-1 bg-dark"></div>
            </div>
        </div>

        <!-- Card Start -->
        <div class="h-56 max-w-sm p-6 mx-auto mt-10 border border-gray-200 shadow bg-primary rounded-2xl md:max-w-3xl">
            <h5 class="mb-2 text-2xl font-light tracking-tight text-white">Input Transaction ID:</h5>
            <form class="my-5">
                <div class="relative">
                    <input type="search" id="default-search"
                        class="block w-full p-4 font-semibold border border-gray-300 rounded-lg md:text-lg text-dark bg-gray-50 focus:ring-blue-500 focus:border-blue-50"
                        placeholder="ex: PS-123456788451" required />

                    <button
                        class="block px-4 py-2 ml-auto mr-0 font-semibold text-white transition-all duration-150 rounded-full bg-dark mt-7 hover:scale-95">Tracking
                        Order</button>
                </div>
            </form>
        </div>
        <!-- Card End -->
    </section>
    <!-- Tracking End -->

    <!-- Result Start -->
    <section class="p-2 mx-auto mt-5 mb-32 md:w-3/4 md:mt-20">
        <div>
            <h1 class="my-2 text-2xl font-semibold">Result of Your Order</h1>
            <div class="w-full h-[.5px] bg-primary relative">
                <div class="absolute w-56 h-1 bg-dark"></div>
            </div>
        </div>

        <!-- Card Start -->
        <div
            class="flex flex-wrap max-w-sm gap-5 p-6 mx-auto mt-10 border border-gray-200 shadow bg-primary rounded-2xl md:max-w-xl">
            <main>
                <h1 class="mb-2 text-2xl font-light tracking-tight text-white">Transaction Date</h1>
                <p class="font-bold text-white">Tuesday, 20 July 2023, 15:46</p>
            </main>
            <main class="md:ml-5">
                <h1 class="mb-2 text-2xl font-light tracking-tight text-white">Transaction ID</h1>
                <p class="font-bold text-white">PS-16750896345872</p>
            </main>

            <div class="w-full h-[1px] bg-white self-auto"></div>
            <main>
                <div>
                    <h1 class="text-2xl font-light tracking-tight text-white">Detail</h1>
                    <p class="font-bold text-white">495 Diamond - Mobile Legend</p>
                </div>
                <div class="mt-3">
                    <h1 class="text-2xl font-light tracking-tighter text-white">Payment Status</h1>
                    <p class="font-bold text-white">Pending/Cancaled/Done</p>
                </div>
            </main>

            <div class="w-full h-[1px] bg-white self-auto"></div>
            <div class="flex items-center">
                <h1 class="text-2xl font-bold text-white">Total Pembayaran</h1>
                <h1 class="ml-20 text-xl font-bold text-right text-orange-500">Rp.xxx.xxx,-</h1>
            </div>
        </div>
        <!-- Card End -->
    </section>
    <!-- Result End -->

    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
