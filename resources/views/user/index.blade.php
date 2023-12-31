@extends('user.layout')

@section('container')
    <!-- Slider Start -->
    <div id="default-carousel" class="relative mx-auto md:w-3/4 md:mt-3" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:rounded-lg md:h-[500px]">
            <!-- Items -->
            @foreach ($banners as $banner)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ $banner->image }}"
                        class="absolute block object-bottom h-56 w-full -translate-x-1/2 -translate-y-1/2 md:h-[500px] top-1/2 left-1/2"
                        alt="..." />
                </div>
            @endforeach
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            @foreach ($banners as $banner)
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="{{ $banner->id }}"></button>
            @endforeach
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
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
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
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
          <h1 class="text-2xl font-bold text-primary my-2 font-['Poppins']">Games</h1>
          <div class="w-full h-[.5px] bg-primary relative">
            <div class="w-20 h-1 bg-primary absolute"></div>
          </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
          @foreach ($games as $game)
            <div class="overflow-hidden rounded-lg">
              <a href="/order/{{ $game->id }}">
                <div class="relative overflow-hidden rounded-lg shadow hover:scale-105 transition-transform">
                  <img alt="{{ $game->name }}" src="{{ $game->image }}" class="absolute inset-0 h-full w-full object-cover" />
    
                  <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                    <div class="p-4 sm:p-6">
                      <p class="mt-2 line-clamp-3 text-center font-bold text-lg/relaxed text-white/95">
                        {{ $game->name }}
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </section>
    <!-- Games End -->

    {{-- About Start --}}
    <div class="md:w-3/4 mx-auto md:mt-10 p-2 mt-5">
        <div>
            <h1 class="text-2xl font-bold text-primary my-2 font-['Poppins']">About Us</h1>
            <div class="w-full h-[.5px] bg-primary relative">
                <div class="w-20 h-1 bg-primary absolute"></div>
            </div>
        </div>

        <div class="flex justify-center items-center gap-10 flex-wrap">
            <div class="kiri md:mt-10 mt-7">
                <img src="/assets/bglogo.png" class="md:h-40 h-32" alt="">
            </div>
            <div class="kanan max-w-2xl md:mt-10 mt-3">
                <h1 class="text-primary font-bold text-3xl font-['Poppins'] md:p-0 px-3">Pisonz Store</h1>
                <p class="text-justify font-regular font-['Poppins'] md:p-0 px-3 mt-2">
                    Selamat datang di Pisonz Store, tujuan terbaik untuk top up game Anda. Kami hadir dengan layanan
                    top up yang cepat, aman, dan efisien. Tim kami yang bersemangat berkomitmen untuk memberikan pengalaman
                    gaming yang tanpa ribet. Pilih Pisonz Store untuk top up yang mudah dan nikmati game favorit Anda dengan
                    lebih lancar.</p>
            </div>
        </div>
    </div>
    {{-- About End --}}
@endsection
