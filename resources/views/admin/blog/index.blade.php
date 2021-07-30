@extends('admin.layout.admin')
@section('content')
@section('main-content')

<div class="p-3">
  <a href="{{ url('/admin/blog/create') }}">
    <button type="button" class="inline-flex items-center p-2 text-white bg-blue-600 border border-transparent rounded-full shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
      <!-- Heroicon name: solid/plus -->
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
      </svg>
    </button>
  </a>
  
</div>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
      <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Title
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Body
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Tags
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <!-- Odd row -->
            <tr class="@if($post->id % 2 != 0) bg-white @else bg-gray-100 @endif">
              <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                <form method="POST" action="{{ route('blog.destroy', $post->id) }}">
                  @csrf 
                  @method('DELETE')
                  {{ $post->id }}

                  <a href="#" class="px-3 text-blue-600 hover:text-blue-900">Edit</a>
                  <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Delete
                  </button>
                </form>

              </td>
              <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                <a class="hover:text-blue-400" href="{{url('/blog')}}/{{$post->id}}">{{ $post->title }}</a>
              </td>
              <td class="w-4 px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                {!! Str::limit($post->body, 60) !!}
              </td>
              <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                @if(auth()->user()->isAdmin()) Admin User @else Contributor @endif 
              </td>
            </tr>
            @endforeach


           </tbody>
        </table>
        {{ $posts->links() }}
      </div>
    </div>
  </div>
</div>

  @endsection
@endsection