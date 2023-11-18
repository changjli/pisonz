@php
    if ($promo) {
        $total = $product->price - ($product->price * $promo->discount) / 100;
    } else {
        $total = $product->price;
    }
@endphp

@extends('user.layout')

@section('container')
    <!-- Payment Start -->
    <section class="p-5 mx-auto mt-5 md:w-3/4 md:mt-20">
        <div>
            <h1 class="my-2 text-2xl font-semibold">Payment</h1>
            <div class="w-full h-[.5px] bg-primary relative">
                <div class="absolute h-1 w-28 bg-dark"></div>
            </div>
        </div>

        <section>
            <form action="/receipt" method="POST" enctype="multipart/form-data">
                @csrf
                <a href="{{ url()->previous() }}">back</a>
                {{-- data dari halaman sebelumnya --}}
                <input type="hidden" name="userId" value="{{ old('userId', $user_id) }}">
                <input type="hidden" name="userNickname" value="{{ old('userNickname', $user_nickname) }}">
                <input type="hidden" name="product" value="{{ old('product', $product->id) }}">
                <input type="hidden" name="payment" value="{{ old('payment', $payment->id) }}">
                @if ($promo)
                    <input type="hidden" name="promo" value="{{ old('promo', $promo->code) }}">
                @else
                    <input type="hidden" name="promo" value="{{ old('promo', '') }}">
                @endif

                <input type="hidden" name="total" value="{{ old('total', $total) }}">
                @if ($email)
                    <input type="hidden" name="email" value="{{ old('email', $email) }}">
                @elseif ($phone)
                    <input type="hidden" name="phone" value="{{ old('phone', $phone) }}">
                @endif

                <h1 class="mt-8 font-bold text-slate-400">Detail</h1>
                <h3>{{ $product->notes }} - {{ $product->Category->Game->name }} - {{ $total }}</h3>
                <div class="w-full h-1 my-3 bg-primary"></div>

                <h1 class="font-bold text-slate-400">Payment Method</h1>
                <img src="assets/order/bca.png" class="w-16 h-5 my-3 md:w-32 md:h-10" alt="bca" />
                <p class="font-bold">{{ $payment->account_number }} a.n {{ $payment->account_name }}</p>
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
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                    to
                                    upload</span> or drag and drop</p>
                            <input
                                class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                id="small_size" type="file" name="payment_evidence" />
                            <p class="text-xs text-gray-500">PNG, JPG (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>

                <button href="receipt.html"
                    class="block w-24 px-4 py-2 ml-auto mr-0 font-semibold text-white transition-all duration-150 rounded-full bg-dark mt-7 hover:scale-95"
                    type="submit">Confirm</button>
                <!-- Upload End -->
            </form>
        </section>
    </section>
    <!-- Payment End -->
@endsection
