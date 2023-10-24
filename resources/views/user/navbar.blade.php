 <!-- Navbar Start -->
 <nav class="border-gray-200 bg-primary sticky top-0 z-[9999] shadow-lg font-['verdana'] font-extralight">
     <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
         <a href="/" class="flex items-center">
             <img src="{{ asset('assets/logo.png') }}" class="h-8 mr-3" alt="Flowbite Logo" />
         </a>
         <button data-collapse-toggle="navbar-default" type="button"
             class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-50 rounded-lg md:hidden hover:scale-105 active:scale-95 transition-all duration-150"
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
                 class="font-medium flex flex-col p-4 text-white md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 text-center">
                 <li>
                     <a href="/"
                         class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-300 md:p-0 text-white hover:text-dark"
                         aria-current="page">Home</a>
                 </li>
                 <li>
                     <a href="/tracking"
                         class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-300 md:p-0 text-white hover:text-dark">Tracking
                         Order</a>
                 </li>
                 <li>
                     <a href="/#games"
                         class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-300 md:p-0 text-white hover:text-dark">Games</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
 <!-- Navbar End -->
