@if(!$posts->isEmpty())
<div>
    <div class="container grid w-3/4 max-w-lg gap-5 p-5 mx-auto lg:grid-cols-2 lg:max-w-none">

        @foreach ($posts as $post)
        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        
            <div class="flex-shrink-0">
              <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
            </div>
        
            <div class="flex flex-col justify-between flex-1 p-6 bg-white">
              <div class="flex-1">
                <p class="text-sm font-medium leading-5 text-indigo-600">
                  <a href="#" class="hover:underline">
                    Blog Post
                  </a>
                </p>
                <a href="#" class="block">
                  <h3 class="mt-2 text-xl font-semibold leading-7 text-gray-900 hover:text-blue-400">
                    {{ $post->title }}
                  </h3>
                  <p class="mt-3 text-base leading-6 text-gray-500">
                   {{ Str::limit($post->body, 120) }}
                  </p>
                </a>
              </div>
              <div class="flex items-center mt-6">
                <div class="flex-shrink-0">
                  <a href="#">
                    <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </a>
                </div>
                <div class="ml-3">
                  <p class="text-sm font-medium leading-5 text-gray-900">
                    <a href="#" class="hover:underline">
                      {{ $post->author }}
                    </a>
                  </p>
                  <div class="flex text-sm leading-5 text-gray-500">
                    <time datetime="2020-03-16">
                      Mar 16, 2020
                    </time>
                    <span class="mx-1">
                      &middot;
                    </span>
                    <span>
                      6 min read
                    </span>
                  </div>
                  <p class="">  @foreach ($post->tags as $tag)
                    <a href="" class="pr-2 text-blue-400 hover:text-blue-600"> {{ $tag->tag }} </a>
                @endforeach</p>
                 
                </div>
              </div>
            </div>
            
          </div>    
        @endforeach
        
    
     
    </div>
    
    <div class="w-1/2 mx-auto">
        {{ $posts->links() }}
      </div>
            
</div>
@else 
<div>
  <div class="container mx-auto">
    <h1 class="p-5 text-4xl text-center">There are currently no blog posts.</h1>
    <p class="w-1/2 pb-5 mx-auto text-2xl text-center">
      Stay tuned! We will be writing new blog posts very soon! Make sure and subscribe to our newsletter for notifications of all of our blog posts, promotions, and all other updates!
    </p>

    <p class="w-1/2 pb-5 mx-auto text-2xl text-center">
      Thank You!
    </p>
    
  </div>
</div>
@endif