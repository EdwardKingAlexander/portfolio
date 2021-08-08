<x-guest-layout>
    @section('title', 'Rocky Mountain Web Design - Recent Blog Posts')

    
<div class="relative py-16 overflow-hidden bg-white">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
      <div class="relative h-full mx-auto text-lg max-w-prose" aria-hidden="true">
        <svg class="absolute transform translate-x-32 top-12 left-full" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
        </svg>
        <svg class="absolute transform -translate-x-32 -translate-y-1/2 top-1/2 right-full" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
        </svg>
        <svg class="absolute transform translate-x-32 bottom-12 left-full" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
        </svg>
      </div>
    </div>
    <div class="relative px-4 sm:px-6 lg:px-8">
      <div class="mx-auto text-lg max-w-prose">
        <h1>
          <span class="block mt-2 text-3xl font-extrabold leading-8 tracking-tight text-center text-gray-900 sm:text-4xl">{{ $post->title }}</span>
        </h1>
        <h2>
            <span class="block mt-2 text-base font-semibold tracking-wide text-center text-blue-600 uppercase">Posted at: {{ $post->created_at->format('M/d/Y') }}</span>
            <small class="block mt-2 text-center text-md"><a class="hover:text-blue-600" href="{{url('/about-us')}}">Written by: Edward</a></small>
        </h2>
        <p class="mt-8 text-xl leading-8 text-gray-500">{!! $post->body !!}</p>
      </div>
      
    </div>
  </div>
  
</x-guest-layout>