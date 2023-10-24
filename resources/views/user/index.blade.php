@extends('user.layout')

@section('container')
  <!-- Slider Start -->
  <div id="default-carousel" class="relative mx-auto md:w-3/4 md:mt-3" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:rounded-lg md:h-[500px]">
      <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="/assets/event.webp"
          class="absolute block object-bottom h-56 w-full -translate-x-1/2 -translate-y-1/2 md:h-[500px] top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="assets/event2.jpg"
          class="md:h-[500px] absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="assets/event3.jpg"
          class="md:h-[500px] absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="assets/event4.jpg"
          class="md:h-[500px] absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="assets/event5.jpg"
          class="md:h-[500px] absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="..." />
      </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
        data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
        data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
        data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
        data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
        data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
      class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-prev>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
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
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
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
            <img class="h-full max-w-full hover:scale-105 transition-transform" src="{{ $game->image }}"
              alt="{{ $game->name }}" />
          </a>
        </div>
      @endforeach

      <div>
        <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform"
          src="assets/games/compressed/cs.jpg" alt="cs" />
      </div>
      <div>
        <img class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform"
          src="assets/games/compressed/cs.jpg" alt="cs" />
      </div>
    </div>
  </section>
  <!-- Games End -->
  @include('user.footer')
@endsection
