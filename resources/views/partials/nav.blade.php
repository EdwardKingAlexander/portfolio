<nav  
x-data="{show: false, search: false}"
class="sticky top-0 bg-white shadow"
id="navbar">
  <div class="px-2 mx-auto max-w-7xl sm:px-4 lg:px-8 ">
    <div class="relative flex items-center justify-between h-16">
      <div class="flex px-2 lg:px-0">
        <div class="flex items-center flex-shrink-0 jusitfy-between sm:h-10 lg:justify-start">
          <a href="/" class="block w-auto h-full lg:hidden" title="Go to homepage">
            <img class="block w-auto h-16 lg:hidden" src="{{asset('img/logo-small.png')}}" alt="Rocky Mountain Web Design LLC logo">
          </a>
          
          <a href="/" class="hidden lg:block">
            <img class="hidden w-auto h-20 lg:block" src="{{asset('img/logo.svg')}}" alt="Rocky Mountain Web Design LLC logo">
          </a>
          
        </div>
        <div class="hidden lg:ml-6 lg:flex">
          @auth
          <x-nav-link url="{{ '/dashboard' }}">
            Dashboard
          </x-nav-link>
          @endauth

          <x-nav-link url="{{ url('/services') }}">Our Services</x-nav-link>
          <x-nav-link url="{{ url('/why-us') }}">Why Us</x-nav-link>
        <x-nav-link url="{{ url('/portfolio') }}">Our Portfolio</x-nav-link>
        <x-nav-link url="{{ url('/contact-us') }}">Contact</x-nav-link>
          

        </div>
      </div>


      <div class="flex items-center justify-center flex-1 px-2 lg:ml-6 lg:justify-end">
        <div class="w-auto max-w-lg lg:max-w-xs">
          <label for="search" class="sr-only">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg>
            </div>
            <input 
            id="search" 
            class="block w-full py-2 pl-20 pr-3 leading-5 text-center placeholder-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md md:w-auto md:pl-10 focus:outline-none focus:placeholder-gray-400 focus:border-blue-300 focus:shadow-outline-blue sm:text-sm" 
            placeholder="Search" 
            type="search">
          </div>
        </div>
      </div>


      <div
      class="flex items-center lg:hidden">
        <!-- Mobile menu button -->
        <button 
        @click="show = !show"
        @click.away = "show = !show"
        :aria-expanded = "show"
        class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500" 
        aria-label="Main menu" 
        aria-expanded="false">
          <!-- Icon when menu is closed. -->
          <!--
            Heroicon name: menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg
          :class="{'hidden': show, 'block': !show}"
           class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Icon when menu is open. -->
          <!--
            Heroicon name: x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg
          :class="{'block': show, 'hidden': !show}" 
          class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:ml-4 lg:flex lg:items-center">
        

      
      </div>
    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
  <div 
  x-show="show" 
  @click="show = !show"
  :class="{'block': show, 'hidden': !show}" 
  class="hidden lg:hidden ">
    <div  class="pt-2 pb-3">
      @auth
      <x-mobile-link url="{{ url('/dashboard') }}"> 
        Dashboard
      </x-mobile-link>
      @endauth

    <x-mobile-link url="{{ url('/services') }}">
        Our Services
      </x-mobile-link>

      <x-mobile-link url="{{ url('/why-us') }}">
        Why Us
      </x-mobile-link>

      <x-mobile-link url="{{ url('/portfolio') }}">
        Our Portfolio
      </x-mobile-link>

      <x-mobile-link url="{{ url('/contact-us') }}">
        Contact
      </x-mobile-link>

      
  
  </div>
</nav>



