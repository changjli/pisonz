<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tracking Order</title>
    <link rel="stylesheet" href="{{ asset('css/final.css') }}" />
</head>

<body>
    @include('user.navbar')

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
            <form class="my-5" action="/tracking" method="GET">
                <div class="relative">
                    <input type="search" id="default-search"
                        class="block w-full p-4 font-semibold border border-gray-300 rounded-lg md:text-lg text-dark bg-gray-50 focus:ring-blue-500 focus:border-blue-50"
                        placeholder="ex: PS-123456788451" required name="transaction_id" />

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

        @if ($transaction)
            <!-- Card Start -->
            <div
                class="flex flex-wrap max-w-sm gap-5 p-6 mx-auto mt-10 border border-gray-200 shadow bg-primary rounded-2xl md:max-w-xl">
                <main>
                    <h1 class="mb-2 text-2xl font-light tracking-tight text-white">Transaction Date</h1>
                    <p class="font-bold text-white">{{ $transaction->created_at }}</p>
                </main>
                <main class="md:ml-5">
                    <h1 class="mb-2 text-2xl font-light tracking-tight text-white">Transaction ID</h1>
                    <p class="font-bold text-white">{{ $transaction->id }}</p>
                </main>

                <div class="w-full h-[1px] bg-white self-auto"></div>
                <main>
                    <div>
                        <h1 class="text-2xl font-light tracking-tight text-white">Detail</h1>
                        <p class="font-bold text-white">{{ $transaction->Product->name }}</p>
                    </div>
                    <div class="mt-3">
                        <h1 class="text-2xl font-light tracking-tighter text-white">Payment Status</h1>
                        <p class="font-bold text-white">{{ $transaction->status }}</p>
                    </div>
                </main>

                <div class="w-full h-[1px] bg-white self-auto"></div>
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-white">Total Pembayaran</h1>
                    <h1 class="ml-20 text-xl font-bold text-right text-orange-500">Rp.
                        {{ $transaction->Product->price }}</h1>
                </div>
            </div>
            <!-- Card End -->
        @endif
    </section>
    <!-- Result End -->

    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
