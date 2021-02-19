@extends('admin.layout.admin')
@section('content')
@section('main-content')

<div class="p-3">
  <a href="{{ url('/admin/users/create') }}">
    <button type="button" class="inline-flex items-center p-2 text-white bg-indigo-600 border border-transparent rounded-full shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      <!-- Heroicon name: outline/plus -->
      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
      </svg>
    </button>
  </a>
</div>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  ID
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Email
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Role
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>

            <tbody>

                @foreach($users as $user)
               
              <!-- Odd row -->
              <tr class="@if($user->id % 2) bg-white @else bg-gray-100 @endif">
                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                  <a href="{{url('/admin/users')}}/{{$user->id}}">{{ $user->name }} </a>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{ $user->id }}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  <a href="{{url('/admin/users')}}/{{$user->id}}">{{ $user->email }}</a>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  @if($user->isAdmin()) Admin @else User @endif
                </td>
                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                  <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                    @csrf 
                    @method('DELETE')
                  <button type="submit" class="ml-3 text-red-600 hover:text-red-900">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
            
  
              <!-- More items... -->
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>
  {{ $users->links() }}
  
  @endsection
@endsection