@extends('admin.layout.admin')
@section('content')
@section('main-content')

  @if($user != null)
  <!-- This example requires Tailwind CSS v2.0+ -->
<div class="overflow-hidden bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg font-medium leading-6 text-gray-900">
      User Information
    </h3>
    <p class="max-w-2xl mt-1 text-sm text-gray-500">
      Account details
    </p>
  </div>
  <div class="px-4 py-5 border-t border-gray-200 sm:px-6">
    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
      <div class="sm:col-span-1">
        <dt class="text-sm font-medium text-gray-500">
          Full name
        </dt>
        <dd class="mt-1 text-sm text-gray-900">
          {{ $user->name }}
        </dd>
      </div>
      <div class="sm:col-span-1">
        <dt class="text-sm font-medium text-gray-500">
          Member Since
        </dt>
        <dd class="mt-1 text-sm text-gray-900">
          {{ $user->created_at->format('F jS, Y h:i:s A') }}
        </dd>
      </div>
      <div class="sm:col-span-1">
        <dt class="text-sm font-medium text-gray-500">
          Email address
        </dt>
        <dd class="mt-1 text-sm text-gray-900">
          {{ $user->email }}
        </dd>
      </div>
      <div class="sm:col-span-1">
        <dt class="text-sm font-medium text-gray-500">
          Admin User?
        </dt>
        <dd class="mt-1 text-sm @if($user->isAdmin()) text-green-600 @else text-gray-900 @endif">
          @if($user->isAdmin())Admin User @else Client User @endif
        </dd>
      </div>
      <div class="sm:col-span-2">
        <dt class="text-sm font-medium text-gray-500">
          About
        </dt>
        <dd class="mt-1 text-sm text-gray-900">
          Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu
        </dd>
      </div>
     
    </dl>
  </div>
 
</div>

<div class="pt-3 text-center">
 

  <form method="POST" action="{{ route('users.destroy', $user->id) }}">
  @csrf
  @method('DELETE')   
  <button 
  type="submit" 
  class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
    Delete User
  </button>

</form>
</div>

@else 

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="p-4 rounded-md bg-yellow-50">
  <div class="flex">
    <div class="flex-shrink-0">
      <!-- Heroicon name: solid/exclamation -->
      <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
      </svg>
    </div>
    <div class="ml-3">
      <h3 class="text-sm font-medium text-yellow-800">
        No User with this ID exists
      </h3>
      <div class="mt-2 text-sm text-yellow-700">
        <p>
          Please confirm the user id of the user you would like to view.
        </p>
      </div>
    </div>
  </div>
</div>


@endif

  @endsection
@endsection