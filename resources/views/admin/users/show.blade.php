@extends('admin.layout.admin')
@section('content')
@section('main-content')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="overflow-hidden bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg font-medium leading-6 text-gray-900">
        Applicant Information
      </h3>
      <p class="max-w-2xl mt-1 text-sm text-gray-500">
        Personal details and application.
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
    <button 
    type="button" 
    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
      Edit User
    </button>
  
    <button 
    type="button" 
    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
      Delete User
    </button>
  </div>

  @endsection
@endsection