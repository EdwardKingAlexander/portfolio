<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div class="lg:hidden">
    <div 
    class="fixed inset-0 z-40 flex"
    :class="{
        'hidden': !sidebar,
        'flex': sidebar
    }"
    >
      <!--
        Off-canvas menu overlay, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0">
        <div class="absolute inset-0 bg-gray-600 opacity-75" aria-hidden="true"></div>
      </div>
      <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
      <div class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-cyan-700">
        <div class="absolute top-0 right-0 pt-2 -mr-12">
          <button
         
          class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
            <span class="sr-only">Close sidebar</span>
            <!-- Heroicon name: outline/x -->
            <svg  @click="sidebar = !sidebar"  class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex items-center flex-shrink-0 px-4">
          <img class="w-auto h-8" src="https://tailwindui.com/img/logos/easywire-logo-cyan-300-mark-white-text.svg" alt="Easywire logo">
        </div>


        <nav class="flex-shrink-0 h-full mt-5 overflow-y-auto divide-y divide-cyan-800" aria-label="Sidebar">
          <div class="px-2 space-y-1">

            
            <!-- Current: "bg-cyan-800 text-white", Default: "text-cyan-100 hover:text-white hover:bg-cyan-600" -->
            <a href="{{ url('/admin') }}" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group" aria-current="page">
              <!-- Heroicon name: outline/home -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Admin Home
            </a>

            <a href="{{ url('/admin/users') }}" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
              Users
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
              <!-- Heroicon name: outline/scale -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg>
              CRM
            </a>

            <a href="{{ '/admin/blog' }}" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
              <!-- Heroicon name: outline/credit-card -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              Blog
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
              <!-- Heroicon name: outline/user-group -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
              Lighthouse Tool
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
              <!-- Heroicon name: outline/document-report -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              Newsletter
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
              <!-- Heroicon name: outline/document-report -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
              Payments
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
              <!-- Heroicon name: outline/document-report -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              Reports
            </a>
          </div>


          <div class="pt-6 mt-6">
            <div class="px-2 space-y-1">
              <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
                <!-- Heroicon name: outline/cog -->
                <svg class="w-6 h-6 mr-4 text-cyan-200 group-hover:text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Settings
              </a>

            </div>
          </div>
        </nav>
      </div>


      <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
      </div>
      
    </div>


  </div>

  
  <!-- Static sidebar for desktop -->
  <div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">


      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto bg-cyan-700">
        <div class="flex items-center flex-shrink-0 px-4">
          <img class="w-auto h-8" src="https://tailwindui.com/img/logos/easywire-logo-cyan-300-mark-white-text.svg" alt="Easywire logo">
        </div>
        <nav class="flex flex-col flex-1 mt-5 overflow-y-auto divide-y divide-cyan-800" aria-label="Sidebar">
          <div class="px-2 space-y-1">
            <!-- Current: "bg-cyan-800 text-white", Default: "text-cyan-100 hover:text-white hover:bg-cyan-600" -->
            <a href="{{ url('/admin') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600" aria-current="page">
              <!-- Heroicon name: outline/home -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Admin Home
            </a>

            <a href="{{ url('/admin/users') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
              <!-- Heroicon name: outline/clock -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
              Users
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
              <!-- Heroicon name: outline/scale -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg>
              CRM
            </a>

            <a href="{{ url('/admin/blog') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
              <!-- Heroicon name: outline/credit-card -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>              
              Blog
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
              <!-- Heroicon name: outline/user-group -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
              Lighthouse Tool
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
              <!-- Heroicon name: outline/document-report -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              Newsletter
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
              <!-- Heroicon name: outline/document-report -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
              Payments
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
              <!-- Heroicon name: outline/document-report -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              Reports
            </a>
          </div>

          <div class="pt-6 mt-6">
            <div class="px-2 space-y-1">
              <a href="#" class="flex items-center px-2 py-2 text-sm font-medium leading-6 rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
                <!-- Heroicon name: outline/cog -->
                <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Settings
              </a>

            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
