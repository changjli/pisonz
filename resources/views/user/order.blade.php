@extends('user.layout')

@section('container')
  <form action="/payment" method="post">
    @csrf
    <!-- Order Start -->
    <section class="p-3 mx-auto mt-5 md:w-3/4 md:mt-20">
      <div>
        <h1 class="my-2 text-2xl font-semibold font-['Poppins'] text-primary">Order</h1>
        <div class="w-full h-[.5px] bg-primary relative">
          <div class="absolute w-16 h-1 bg-primary"></div>
        </div>
      </div>

      <!-- Card Start [Input Game Data] -->
      <div class="relative w-full p-5 py-8 mt-5 bg-teal-100 rounded-3xl">


        <div class="flex gap-4 mb-5">
          <div class="flex items-center justify-center p-3 text-white rounded rotate-45 -top-1 -left-2 h-5 w-5 bg-primary">
            <span class="-rotate-45 font-bold text-sm">1</span>
          </div>
          <div>
            <h1 class="font-semibold font-['Poppins']">Input Game Data</h1>
            <div class="w-full h-1 bg-primary mt-2"></div>
          </div>
        </div>


        <div class="gap-2 p-5 mt-2 rounded-lg bg-primary md:flex md:items-center md:gap-20 justify-evenly">
          <main>
            <h2 class="mb-2 text-white md:text-center font-['Poppins'] tracking-[1px]">User ID</h2>
            <input type="text" id="default-search"
              class="block w-full text-dark border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-50 md:w-96 md:h-11 md:text-base text-[.75rem] font-['roboto'] font-medium tracking-wide"
              placeholder="ex: 2541554124" required name="user_id" autocomplete="off" value="{{ old('user_id') }}" />
            @error('user_id')
              {{ $message }}
            @enderror
          </main>

          <main>
            <h2 class="mt-3 mb-2 text-white md:text-center md:mt-0 font-['Poppins'] tracking-[1px]">User Nickname</h2>
            <input type="text" id="default"
              class="block w-full text-dark border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-50 md:w-96 md:h-11 md:text-base text-[.75rem] font-['roboto'] font-medium tracking-wide"
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


        <div class="flex gap-4 mb-5">
          <div
            class="flex items-center justify-center p-3 text-white rounded rotate-45 -top-1 -left-2 h-5 w-5 bg-primary">
            <span class="-rotate-45 font-bold text-sm">2</span>
          </div>
          <div>
            <h1 class="font-semibold font-['Poppins']">Choose Service Nominal</h1>
            <div class="w-full h-1 bg-primary mt-2"></div>
          </div>
        </div>


        <div class="mt-3">
          @foreach ($game->Category as $category)
            <div class="text-primary font-bold mt-3 font-['Poppins'] tracking-[1px] text-sm">{{ $category->name }}</div>
            <div class="grid grid-cols-3 gap-3 mt-3 place-items-center md:grid-cols-4">
              @foreach ($category->Product as $product)
                <input type="radio" value="{{ $product->id }}" name="product" class="hidden" id="{{ $product->id }}"
                  @if (old('product') == $product->id) checked @endif>
                <label for="{{ $product->id }}"
                  class="p-3 text-center text-white rounded-lg cursor-pointer bg-primary border-2 border-sky-500 w-full hover:scale-105 checked:bg-black">
                  <div class="font-['Poppins'] tracking-[1px] font-light">{{ $product->name }}</div>
                  <div class="font-['Poppins'] tracking-[1px]">Rp. {{ $product->price }}</div>
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

        <div class="flex gap-4 mb-5">
          <div
            class="flex items-center justify-center p-3 text-white rounded rotate-45 -top-1 -left-2 h-5 w-5 bg-primary">
            <span class="-rotate-45 font-bold text-sm">3</span>
          </div>
          <div>
            <h1 class="font-semibold font-['Poppins']">Choose Payment Method</h1>
            <div class="w-full h-1 bg-primary mt-2"></div>
          </div>
        </div>



        <section class="grid grid-cols-2 gap-3">
          @foreach ($payments as $payment)
            <input type="radio" value="{{ $payment->id }}" name="payment" id="{{ $payment->method }}" class="hidden"
              @if (old('payment') == $payment->id) checked @endif>
            <label for="{{ $payment->method }}"
              class="flex items-center justify-between max-w-xl p-5 my-5 bg-white shadow-2xl hover:opacity-60 rounded-xl">
              <h1 class="font-semibold md:text-xl">{{ $payment->method }}</h1>
              <div class="flex gap-4 md:gap-10">
                <img src="{{ $payment->img }}" class="w-16 h-5 md:w-36 md:h-10 cursor-pointer"
                  alt="{{ $payment->method }}" />
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


      {{-- Card Start [Promo] --}}
      <div class="relative w-full p-5 py-8 mt-5 bg-teal-100 rounded-3xl">


        <div class="flex gap-4 mb-5">
          <div
            class="flex items-center justify-center p-3 text-white rounded rotate-45 -top-1 -left-2 h-5 w-5 bg-primary">
            <span class="-rotate-45 font-bold text-sm">4</span>
          </div>
          <div>
            <h1 class="font-semibold font-['Poppins']">Promo</h1>
            <div class="w-full h-1 bg-primary mt-2"></div>
          </div>
        </div>


        <div class="p-6 mx-auto border border-gray-200 shadow bg-primary rounded-2xl md:max-w-3xl">
          <h5 class="mb-2 text-lg font-medium text-white font-['Poppins'] tracking-[1px]">Input Promo Code:
          </h5>


          <div class="relative">
            <input type="text" id="default-search"
              class="block w-full p-4 font-medium rounded-lg md:text-lg text-dark bg-gray-50 focus:ring-blue-500 focus:border-blue-50 font-['Poppins'] @error('email') border-4 border-red-600  @enderror tracking-[1px]"
              placeholder="ex: pz-101" required name="email" value="{{ old('email') }}" />
            @error('email')
              <div class="text-red-600 font-bold font-['Poppins']">
                {{ $message }}
              </div>
            @enderror

          </div>
        </div>




      </div>
      {{-- Card End [Promo] --}}


      <!-- Card Start [Payment Confirmation] -->
      <div class="relative w-full p-5 py-8 mt-5 bg-teal-100 rounded-3xl">


        <div class="flex gap-4 mb-5">
          <div
            class="flex items-center justify-center p-3 text-white rounded rotate-45 -top-1 -left-2 h-5 w-5 bg-primary">
            <span class="-rotate-45 font-bold text-sm">5</span>
          </div>
          <div>
            <h1 class="font-semibold font-['Poppins']">Payment Confirmation</h1>
            <div class="w-full h-1 bg-primary mt-2"></div>
          </div>
        </div>

        <div
          class="max-w-sm p-6 mx-auto mt-10 border border-gray-200 shadow bg-primary rounded-2xl md:max-w-3xl">
          <h5 class="mb-2 text-xl font-medium  text-white font-['Poppins'] tracking-[1px]">Input WhatsApp
            Number:
          </h5>
          <div class="relative">
            <input type="text" id="default-search"
              class="block w-full p-4 font-medium  rounded-lg md:text-lg text-dark bg-gray-50 focus:ring-blue-500 focus:border-blue-50 font-['Poppins'] @error('email') border-4 border-red-600  @enderror tracking-[1px]"
              placeholder="ex: 081212541247" required name="email" value="{{ old('email') }}" />
            @error('email')
              <div class="text-red-600 font-bold font-['Poppins']">
                {{ $message }}
              </div>
            @enderror
            <button href="payment.html"
              class="block px-4 py-2 ml-auto mr-0 font-medium text-white transition-all duration-150 rounded-full bg-dark mt-7 hover:scale-95 font-['Poppins'] tracking-[1px]"
              type="submit">Continue</button>
          </div>
        </div>
      </div>
      <!-- Card End [Payment Confirmation] -->
    </section>
    <!-- Order End -->
  </form>
@endsection
