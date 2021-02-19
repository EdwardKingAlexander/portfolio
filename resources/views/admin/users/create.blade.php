@extends('admin.layout.admin')
@section('content')
@section('main-content')

<div class="w-1/2 mx-auto mt-6">
    <form action="{{ route('users.store') }}" method="POST" class="space-y-6">
      @csrf

      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">
          Name
        </label>
        <div class="mt-1">
          <input id="name" name="name" type="text" autocomplete="name" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">
          Email address
        </label>
        <div class="mt-1">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
      </div>

      <div class="space-y-1">
        <label for="password" class="block text-sm font-medium text-gray-700">
          Password
        </label>
        <div class="mt-1">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
      </div>

      <div class="space-y-1">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
          Confirm Password
        </label>
        <div class="mt-1">
          <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
      </div>




      <div>
        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-400 border border-transparent rounded-md shadow-sm hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Create User
        </button>
      </div>
    </form>
</div>

  @endsection
@endsection