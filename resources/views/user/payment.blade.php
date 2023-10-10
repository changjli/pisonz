<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment</title>
    <link rel="stylesheet" href="{{ asset('css/final.css') }}" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="border-gray-200 dark:bg-gray-900 bg-primary sticky top-0 z-[9999] shadow-lg">
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

    <!-- Payment Start -->
    <section class="p-5 mx-auto mt-5 md:w-3/4 md:mt-20">
        <div>
            <h1 class="my-2 text-2xl font-semibold">Payment</h1>
            <div class="w-full h-[.5px] bg-primary relative">
                <div class="absolute h-1 w-28 bg-dark"></div>
            </div>
        </div>

        <section>
            <h1 class="mt-8 font-bold text-slate-400">Detail</h1>
            <h3>495 Diamond - Mobile Legend</h3>
            <div class="w-full h-1 my-3 bg-primary"></div>

            <h1 class="font-bold text-slate-400">Payment Method</h1>
            <h3>495 Diamond - Mobile Legend</h3>
            <img src="assets/order/bca.png" class="w-16 h-5 my-3 md:w-32 md:h-10" alt="bca" />
            <p class="font-bold">xxxxxxxxx a.n Pisonz Store</p>
            <div class="w-full h-1 my-3 bg-primary"></div>

            <!-- Upload Start -->
            <div class="flex items-center justify-center w-11/12 mx-auto md:w-3/4 mt-7">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-10">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                                upload</span> or drag and drop</p>
                        <input
                            class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            id="small_size" type="file" />
                        <p class="text-xs text-gray-500">PNG, JPG (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>

            <a href="receipt.html"
                class="block w-24 px-4 py-2 ml-auto mr-0 font-semibold text-white transition-all duration-150 rounded-full bg-dark mt-7 hover:scale-95">Confirm</a>
            <!-- Upload ENd -->
        </section>
    </section>
    <!-- Payment End -->

    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
