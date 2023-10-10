<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Receipt</title>
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

    <!-- Receipt Start -->
    <section class="p-5 mx-auto mt-5 rounded-lg md:w-3/4 md:mt-20">
        <div>
            <h1 class="my-2 text-2xl font-semibold">Receipt</h1>
            <div class="w-full h-[.5px] bg-primary relative">
                <div class="absolute w-20 h-1 bg-dark"></div>
            </div>
        </div>

        <div class="w-full p-5 py-8 mt-5 bg-teal-100">
            <div>
                <h1 class="font-light">Transaction ID</h1>
                <p class="font-bold">PS - 16750896345872</p>
            </div>

            <div class="mt-1">
                <h1 class="font-light">User ID</h1>
                <p class="font-bold">1234564</p>
            </div>

            <div class="mt-1">
                <h1 class="font-light">User Nickname</h1>
                <p class="font-bold">BudiAntonWawan</p>
            </div>
        </div>
        <div class="mt-4 text-center text-[15px]">
            <h1 class="mb-2 font-bold">Transaction will be sent to your email</h1>
            <p>You can check your order status(trackorder) or contact us on (whatsapp)</p>
        </div>
    </section>
    <!-- Receipt End -->
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
