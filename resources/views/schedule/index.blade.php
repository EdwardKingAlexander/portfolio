<x-guest-layout>
@section('title', 'Schedule a Consultation for Web Services')
        <h1 class="w-1/2 p-5 mx-auto text-5xl text-center">Fill out this form to schedule your consultation:</h1>
        
        @if(session('message'))

        @else 
        <div class="text-center">
            <small class="text-lg text-red-600 underline">All Fields Are Required</small>

        </div>

        @endif

        <div class="flex items-center p-5">
        <form action="{{ route('schedule-meeting') }}" method="POST" class="w-1/2 p-10 mx-auto my-auto text-center border rounded shadow">
                @csrf 

                @if(session('message'))
                <div class="p-3 text-xl text-center text-green-500">
                    {{ session('message') }}
                </div>
                @endif

                <label class="text-xl" for="name">Your Name:</label>
                <br>
                <input class="mb-5 rounded" value="{{ old('name') }}" type="text" name="name"  id="">
                <br>
                @error('name')
        <div class="text-lg text-red-500">{{ $message }}</div>
        <br>
                @enderror

                <label class="text-xl" for="email">Your Email:</label>
                <br>
        <input class="mb-5 rounded" value="{{ old('email') }}" type="email" name="email"  id="">
                <br>

                @error('email')
                <div class="text-lg text-red-500">{{ $message }}</div>
                <br>
                @enderror

                <label class="text-xl" for="phone">Your Phone Number:</label>
                <br>
                <input class="mb-5 rounded" type="tel" value="{{ old('number') }}" name="number"  id="">
                <br>
                @error('number')
                <div class="text-lg text-red-500">{{ $message }}</div>
                <br>
                @enderror

                <label class="text-xl" for="summary">Describe a brief description of what service/s you're interested in:</label>
                <br>
                <textarea class="mb-5 rounded" name="summary" value="{{ old('summary') }}" id="" cols="60" rows="10"></textarea>
                @error('summary')
                <div class="text-lg text-red-500">{{ $message }}</div>
                <br>
                @enderror

                <br>
               
                <input class="p-3 text-xl text-white bg-blue-400 rounded text-bold" type="submit" value="Submit Contact Info">

                

            </form>
        </div>
</x-guest-layout>