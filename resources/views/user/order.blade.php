<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order</title>
    <link rel="stylesheet" href="{{ asset('css/final.css') }}" />
    <link rel="stylesheet" href="{{ asset('resour') }}">
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Navbar Start -->
    <nav class="border-gray-200 bg-primary sticky top-0 z-[9999] shadow-lg">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <a href="index.html" class="flex items-center">
                <img src="{{ asset('assets/logo.png') }}" class="h-8 mr-3" alt="Flowbite Logo" />
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
                            class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 hover:text-dark">Tracking
                            Order</a>
                    </li>
                    <li>
                        <a href="index.html?#games"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 hover:text-dark">Games</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <form action="" method="post">
        <!-- Order Start -->
        <section class="p-3 mx-auto mt-5 md:w-3/4 md:mt-20">
            <div>
                <h1 class="my-2 text-2xl font-semibold">Order</h1>
                <div class="w-full h-[.5px] bg-primary relative">
                    <div class="absolute w-16 h-1 bg-dark"></div>
                </div>
            </div>

            <!-- Card Start [Input Game Data] -->
            <div class="relative w-full p-5 py-8 mt-5 bg-teal-100 rounded-3xl">
                <div
                    class="absolute flex items-center justify-center p-3 text-white rounded-full -top-1 -left-2 h-7 w-7 bg-primary">
                    1</div>
                <h1 class="font-bold">Input Game Data</h1>
                <div class="gap-2 p-5 mt-2 rounded-lg bg-primary md:flex md:items-center md:gap-20 justify-evenly">
                    <main>
                        <h2 class="mb-2 text-white md:text-center">User ID</h2>
                        <input type="search" id="default-search"
                            class="block w-full font-semibold text-dark border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-50 md:w-96 md:h-11 md:text-base text-[.75rem]"
                            placeholder="ex: 2541554124" required name="userId" />
                    </main>

                    <main>
                        <h2 class="mt-3 mb-2 text-white md:text-center md:mt-0">User Nickname</h2>
                        <input type="search" id="default"
                            class="block w-full font-semibold text-dark border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-50 md:w-96 md:h-11 md:text-base text-[.75rem]"
                            placeholder="ex: budiantonawawan" required name="userNickname" />
                    </main>
                </div>
            </div>
            <!-- Card End [Input Game Data]-->

            <!-- Card Start [Choose Service Nominal] -->
            <div class="relative w-full p-5 py-8 mt-5 bg-teal-100 rounded-3xl">
                <div
                    class="absolute flex items-center justify-center p-3 text-white rounded-full -top-1 -left-2 h-7 w-7 bg-primary">
                    2</div>
                <h1 class="font-bold">Choose Service Nominal</h1>
                <div
                    class="grid grid-cols-2 grid-rows-3 gap-3 mt-3 place-items-center md:gap-3 md:grid-rows-3 md:grid-cols-4">
                    @foreach ($game->Category as $category)
                        @foreach ($category->Product as $product)
                            <div
                                class="p-3 text-center text-white rounded-full bg-primary md:w-60 w-36 hover:scale-105">
                                {{ $product->price }}
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <!-- Card End [Choose Service Nominal] -->

            <!-- Card Start [Choose Payment Method] -->
            <div class="relative w-full p-5 py-8 mt-5 bg-teal-100 rounded-3xl">
                <div
                    class="absolute flex items-center justify-center p-3 text-white rounded-full -top-1 -left-2 h-7 w-7 bg-primary">
                    3</div>
                <h1 class="font-bold">Choose Payment Method</h1>

                <section class="grid grid-cols-2 gap-3">
                    @foreach ($payments as $payment)
                        <div
                            class="flex items-center justify-between max-w-xl p-5 my-5 bg-white shadow-2xl hover:opacity-60 rounded-xl">
                            <h1 class="font-semibold md:text-xl">{{ $payment->method }}</h1>
                            <div class="flex gap-4 md:gap-10">
                                <img src="assets/order/bri.png" class="w-16 h-5 md:w-32 md:h-10" alt="BRI" />
                            </div>
                        </div>
                    @endforeach
                    {{-- <!-- BRI Start -->

            <!-- BRI END -->

            <!-- BCA Start -->
            <div
                class="flex items-center justify-between max-w-xl p-5 my-5 bg-white shadow-2xl hover:opacity-60 rounded-xl">
                <h1 class="font-semibold md:text-xl">BCA</h1>
                <div class="flex gap-4 md:gap-10">
                    <img src="assets/order/bca.png" class="w-16 h-5 md:w-32 md:h-10" alt="bca" />
                </div>
            </div>
            <!-- BCA End -->

            <!-- Dana Start -->
            <div
                class="flex items-center justify-between max-w-xl p-5 my-5 bg-white shadow-2xl hover:opacity-60 rounded-xl">
                <h1 class="font-semibold md:text-xl">Dana</h1>
                <div class="flex gap-4 md:gap-10">
                    <img src="assets/order/dana.jpg" class="h-5 md:w-20 md:h-5 w-14" alt="dana" />
                </div>
            </div>
            <!-- Dana End -->

            <!-- OVO Start -->
            <div
                class="flex items-center justify-between max-w-xl p-5 my-5 bg-white shadow-2xl hover:opacity-60 rounded-xl">
                <h1 class="font-semibold md:text-xl">OVO</h1>
                <div class="flex gap-4 md:gap-10">
                    <img src="assets/order/ovo.png" class="h-5 md:w-16 md:h-5 w-14" alt="OVO" />
                </div>
            </div>
            <!-- OVO End -->

            <!-- Gopay Start -->
            <div
                class="flex items-center justify-between max-w-xl p-5 my-5 bg-white shadow-2xl hover:opacity-60 rounded-xl">
                <h1 class="font-semibold md:text-xl">Gopay</h1>
                <div class="flex gap-4 md:gap-10">
                    <img src="assets/order/gopay.png" class="h-4 md:w-20 md:h-5 w-14" alt="gopay" />
                </div>
            </div>
            <!-- Gopay End -->

            <!-- Shopeepay Start -->
            <div
                class="flex items-center justify-between max-w-xl p-5 my-5 bg-white shadow-2xl hover:opacity-60 rounded-xl">
                <h1 class="md:text-xl text-[12px] font-semibold">Shopeepay</h1>
                <div class="flex gap-4 md:gap-10">
                    <img src="assets/order/shopeepay.png" class="w-10 h-5 md:w-20 md:h-10" alt="shopeepay" />
                </div>
            </div>
            <!-- shopeepay End --> --}}
                </section>
            </div>
            <!-- Card End [Choose Payment Method] -->

            <!-- Card Start [Payment Confirmation] -->
            <div class="relative w-full p-5 py-8 mt-5 bg-teal-100 rounded-3xl">
                <div
                    class="absolute flex items-center justify-center p-3 text-white rounded-full -top-1 -left-2 h-7 w-7 bg-primary">
                    4</div>
                <h1 class="font-bold">Payment Confirmation</h1>

                <div
                    class="h-56 max-w-sm p-6 mx-auto mt-10 border border-gray-200 shadow bg-primary rounded-2xl md:max-w-3xl">
                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-white">Input Email or WhatsApp Number:
                    </h5>
                    <form class="my-5">
                        <div class="relative">
                            <input type="search" id="default-search"
                                class="block w-full p-4 font-semibold border border-gray-300 rounded-lg md:text-lg text-dark bg-gray-50 focus:ring-blue-500 focus:border-blue-50"
                                placeholder="ex: budi@gmail.com or 081212541247" required />

                            <!-- <button href="payment.html" class="block px-4 py-2 ml-auto mr-0 font-semibold text-white transition-all duration-150 rounded-full bg-dark mt-7 hover:scale-95">Continue</button> -->

                            <a href="payment.html"
                                class="block w-24 px-4 py-2 ml-auto mr-0 font-semibold text-white transition-all duration-150 rounded-full bg-dark mt-7 hover:scale-95">Continue</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Card End [Payment Confirmation] -->
        </section>
        <!-- Order End -->
    </form>

    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
