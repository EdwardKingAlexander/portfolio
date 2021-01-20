<x-guest-layout>
    @section('title', 'Schedule a Consultation')
    @section('head')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endsection

<div class="relative bg-white">
    <div class="lg:absolute lg:inset-0">
      <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="object-cover w-full h-56 lg:absolute lg:h-full" src="{{ asset('img/schedule.jpg') }}" alt="picture of people sitting around a table in an office">
      </div>
    </div>
    <div class="relative px-4 pt-12 pb-16 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
      <div class="lg:pr-8">
        <div class="max-w-md mx-auto sm:max-w-lg lg:mx-0">
          <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
            Let's work together
          </h2>
          <p class="mt-4 text-lg text-gray-500 sm:mt-3">
            We’d love to hear from you! Send us a message using the form, or email us directly and we'll contact you as soon as possible.
          </p>

          @if(session('message'))

          <div class="p-3 text-xl text-center text-green-500">
              {{ session('message') }}
          </div>

          @else 
          <div class="mt-3 text-center">
              <small class="text-red-600 underline md:text-lg text-md">Fields marked with * are required</small>
  
          </div>
  
          @endif
          <form action="{{ route('schedule-meeting') }}" method="POST" class="grid grid-cols-1 mt-9 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
            @csrf

            <div class="sm:col-span-2">
             

                @error('name')
                <div class="text-lg text-red-500">{{ $message }}</div>
                <br>
                @enderror

              <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
              <div class="mt-1">
                <input type="text" value="{{ old('name') }}" name="name" id="name" autocomplete="name" class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-blue-500 focus:border-blue-500">
              </div>
            </div>

      


            <div class="sm:col-span-2">
                @error('email')
                <div class="text-lg text-red-500">{{ $message }}</div>
                <br>
                @enderror
              <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
              <div class="mt-1">
                <input id="email" value="{{ old('email') }}" name="email" type="email" autocomplete="email" class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-blue-500 focus:border-blue-500">
              </div>
            </div>


            

            <div class="sm:col-span-2">
                @error('company')
            <div class="text-lg text-red-500">{{ $message }}</div>
            <br>
            @enderror
              <label for="company" class="block text-sm font-medium text-gray-700">Company *</label>
              <div class="mt-1">
                <input type="text" value="{{ old('company') }}" name="company" id="company" autocomplete="organization" class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-blue-500 focus:border-blue-500">
              </div>
            </div>



            <div class="sm:col-span-2">
                @error('number')
            <div class="text-lg text-red-500">{{ $message }}</div>
            <br>
            @enderror
              <div class="flex justify-between">
                <label for="number" class="block text-sm font-medium text-gray-700">Phone *</label>
                <span id="number_description" class="text-sm text-gray-500">Format: xxxxxxxxxx</span>
              </div>
              <div class="mt-1">
                <input type="text" value="{{ old('number') }}" name="number" id="number" autocomplete="tel" aria-describedby="number_description" class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-blue-500 focus:border-blue-500">
              </div>
            </div>

            

            <div class="sm:col-span-2">
                
            @error('summary')
            <div class="text-lg text-red-500">{{ $message }}</div>
            <br>
            @enderror
              <div class="flex justify-between">
                <label for="how_can_we_help" class="block text-sm font-medium text-gray-700">How can we help you? *</label>
                <span id="how_can_we_help_description" class="text-sm text-gray-500">Max. 500 characters</span>
              </div>
              <div class="mt-1">
                <textarea id="summary" name="summary" aria-describedby="how_can_we_help_description" rows="4" class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-blue-500 focus:border-blue-500">{{ old('summary') }}</textarea>
              </div>
            </div>


          
            <fieldset class="sm:col-span-2">
                @error('budget')
            <div class="text-lg text-red-500">{{ $message }}</div>
            <br>
            @enderror
              <legend class="block text-sm font-medium text-gray-700">
                Expected budget *
              </legend>
              <div class="grid grid-cols-1 mt-4 gap-y-4">
                <div class="flex items-center">
                  <input id="budget_under_25k" name="budget" value="under_25k" type="radio" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                  <label for="budget_under_25k" class="ml-3">
                    <span class="block text-sm text-gray-700">Less than $25K</span>
                  </label>
                </div>
        
                <div class="flex items-center">
                  <input id="budget_25k-50k" name="budget" value="25k-50k" type="radio" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                  <label for="budget_25k-50k" class="ml-3">
                    <span class="block text-sm text-gray-700">$25K – $50K</span>
                  </label>
                </div>


                <div class="flex items-center">
                  <input id="budget_50k-100k" name="budget" value="50k-100k" type="radio" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                  <label for="budget_50k-100k" class="ml-3">
                    <span class="block text-sm text-gray-700">$50K – $100K</span>
                  </label>
                </div>


                <div class="flex items-center">
                  <input id="budget_over_100k" name="budget" value="over_100k" type="radio" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                  <label for="budget_over_100k" class="ml-3">
                    <span class="block text-sm text-gray-700">$100K+</span>
                  </label>
                </div>
              </div>
            </fieldset>



            <div class="sm:col-span-2">
              <label for="how_did_you_hear_about_us" class="block text-sm font-medium text-gray-700">How did you hear about us?</label>
              <div class="mt-1">
                <input type="text" name="how_did_you_hear_about_us" id="how_did_you_hear_about_us" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
              </div>
            </div>

            <div class="inline-block">
                @error('g-recaptcha-response')
                    <div class="text-lg text-red-500">
                        You must verify you are not a robot!!
                    </div>
                    <br>
                @enderror
                <div class="pb-2 text-center g-recaptcha" data-theme="dark light" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
        </div>
<br/>


            <div class="text-right sm:col-span-2">
              <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Submit
              </button>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>
  
</x-guest-layout>