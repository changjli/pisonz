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
    @include('user.navbar')

    <form action="/payment" method="post">
        @csrf
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
                        <input type="text" id="default-search"
                            class="block w-full font-semibold text-dark border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-50 md:w-96 md:h-11 md:text-base text-[.75rem]"
                            placeholder="ex: 2541554124" required name="user_id" autocomplete="off"
                            value="{{ old('user_id') }}" />
                        @error('user_id')
                            {{ $message }}
                        @enderror
                    </main>

                    <main>
                        <h2 class="mt-3 mb-2 text-white md:text-center md:mt-0">User Nickname</h2>
                        <input type="text" id="default"
                            class="block w-full font-semibold text-dark border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-50 md:w-96 md:h-11 md:text-base text-[.75rem]"
                            placeholder="ex: budiantonawawan" required name="user_nickname" autocomplete="off"
                            value="{{ old('user_nickname') }}" />
                        @error('user_nickname')
                            {{ $message }}
                        @enderror
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
                <div class="mt-3">
                    @foreach ($game->Category as $category)
                        <div class="text-primary font-bold mt-3">{{ $category->name }}</div>
                        <div class="grid grid-cols-3 gap-3 mt-3 place-items-center md:grid-cols-4">
                            @foreach ($category->Product as $product)
                                <input type="radio" value="{{ $product->id }}" name="product" class="hidden"
                                    id="{{ $product->id }}" @if (old('product') == $product->id) checked @endif>
                                <label for="{{ $product->id }}"
                                    class="p-3 text-center text-white rounded-full bg-primary w-full hover:scale-105 checked:bg-black">
                                    <div>{{ $product->name }}</div>
                                    <div>Rp. {{ $product->price }}</div>
                                </label>
                            @endforeach
                        </div>
                    @endforeach
                    @error('product')
                        {{ $message }}
                    @enderror
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
                        <input type="radio" value="{{ $payment->id }}" name="payment" id="{{ $payment->method }}"
                            class="hidden" @if (old('payment') == $payment->id) checked @endif>
                        <label for="{{ $payment->method }}"
                            class="flex items-center justify-between max-w-xl p-5 my-5 bg-white shadow-2xl hover:opacity-60 rounded-xl">
                            <h1 class="font-semibold md:text-xl">{{ $payment->method }}</h1>
                            <div class="flex gap-4 md:gap-10">
                                <img src="assets/order/bri.png" class="w-16 h-5 md:w-32 md:h-10" alt="BRI" />
                            </div>
                        </label>
                    @endforeach
                    @error('payment')
                        {{ $message }}
                    @enderror
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
                    <div class="relative">
                        <input type="text" id="default-search"
                            class="block w-full p-4 font-semibold border border-gray-300 rounded-lg md:text-lg text-dark bg-gray-50 focus:ring-blue-500 focus:border-blue-50"
                            placeholder="ex: budi@gmail.com or 081212541247" required name="email"
                            value="{{ old('email') }}" />
                        @error('email')
                            {{ $message }}
                        @enderror
                        <button href="payment.html"
                            class="block px-4 py-2 ml-auto mr-0 font-semibold text-white transition-all duration-150 rounded-full bg-dark mt-7 hover:scale-95"
                            type="submit">Continue</button>
                    </div>
                </div>
            </div>
            <!-- Card End [Payment Confirmation] -->
        </section>
        <!-- Order End -->
    </form>

    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
