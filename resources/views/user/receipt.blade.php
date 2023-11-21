@extends('user.layout')

@section('container')
    @if (session()->has('transaction'))
        @php
            $transaction = session('transaction');
        @endphp
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
                    <p class="font-bold">{{ $transaction->id }}</p>
                </div>

                <div class="mt-1">
                    <h1 class="font-light">User ID</h1>
                    <p class="font-bold">{{ $transaction->user_id }}</p>
                </div>

                <div class="mt-1">
                    <h1 class="font-light">User Nickname</h1>
                    <p class="font-bold">{{ $transaction->user_nickname }}</p>
                </div>
            </div>
            <div class="mt-4 text-center text-[15px]">
                <h1 class="mb-2 font-bold">Transaction will be sent to your email</h1>
                <p>You can check your order status(trackorder) or contact us on (whatsapp)</p>
            </div>
        </section>
        <!-- Receipt End -->
    @else
        <div>page expired</div>
    @endif
@endsection
