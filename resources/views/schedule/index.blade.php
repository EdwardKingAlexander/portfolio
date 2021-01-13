<x-guest-layout>

        @section('title', 'Schedule a Consultation for Web Services')

        @section('head')
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        @endsection

        <h1 class="w-1/2 p-5 mx-auto text-xl text-center text-bold md:text-5xl">Fill out this form to schedule your consultation:</h1>
        
        @if(session('message'))

        @else 
        <div class="text-center">
            <small class="text-red-600 underline md:text-lg text-md">All Fields Are Required</small>

        </div>

        @endif

        <div class="flex items-center p-5">
        <form action="{{ route('schedule-meeting') }}" method="POST" class="w-full p-10 mx-auto my-auto text-center border rounded shadow md:w-1/2">
                @csrf 

                @if(session('message'))
                <div class="p-3 text-xl text-center text-green-500">
                    {{ session('message') }}
                </div>
                @endif

                <label class="text-xl" for="name">Your Name:</label>
                <br>
                <input class="mb-5 rounded" value="{{ old('name') }}" autocomplete="name" type="text" name="name"  id="">
                <br>
                @error('name')
        <div class="text-lg text-red-500">{{ $message }}</div>
        <br>
                @enderror

                <label class="text-xl" for="email">Your Email:</label>
                <br>
        <input class="mb-5 rounded" value="{{ old('email') }}" autocomplete="email" type="email" name="email"  id="">
                <br>

                @error('email')
                <div class="text-lg text-red-500">{{ $message }}</div>
                <br>
                @enderror

                <label class="text-xl" for="phone">Your Phone Number:</label>
                <br>
                <small class="text-lg text-green-500">Format: xxxxxxxxxx (No Dashes or spaces)</small>
                <br>
                <input class="mb-5 rounded" type="tel" placeholder="xxxxxxxxxx" autocomplete="tel" value="{{ old('number') }}" name="number"  id="">
                <br>
                @error('number')
                <div class="text-lg text-red-500">{{ $message }}</div>
                <br>
                @enderror

                <label class="text-xl" for="summary">Describe a brief description of what service/s you're interested in:</label>
                <br>
                <textarea class="mb-5 rounded" name="summary" id="" rows="10">
                        {{ old('summary') }}
                </textarea>
                @error('summary')
                <div class="text-lg text-red-500">{{ $message }}</div>
                <br>
                @enderror

                <br>
                <div class="inline-block">
                        <div class="pb-2 text-center g-recaptcha" data-theme="dark light" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                </div>
      <br/>
      @error('g-recaptcha-response')
      <div class="text-lg text-red-500">You must verify you are not a robot!!</div>
      <br>
      @enderror
               
                <input class="p-3 text-xl text-white bg-blue-400 rounded text-bold" type="submit" value="Submit Contact Info">

                

            </form>
        </div>
</x-guest-layout>