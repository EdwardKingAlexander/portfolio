@extends('admin.layout.admin')
@section('content')
@section('main-content')

<!-- This example requires Tailwind CSS v2.0+ -->
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
                  <a href="" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  <a href="#" class="ml-3 text-red-600 hover:text-red-900">Delete</a>
                </td>
              </tr>
              @endforeach
            
  
              <!-- More items... -->
            </tbody>
          </table>
          {{ $users->links() }}
        </div>
      </div>
    </div>
  </div>
  
  @endsection
@endsection