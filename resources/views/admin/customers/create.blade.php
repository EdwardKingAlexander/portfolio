@extends('admin.layout.admin')
    @section('content')
    @section('main-content')

<div class="space-y-6">
    <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:p-6">
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Profile for {{ $user->name }}</h3>
          <p class="mt-1 text-sm text-gray-500">
            This information will be displayed publicly so be careful what you share.
          </p>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
          <form class="space-y-6" action="#" method="POST">
              @csrf
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="company_website" class="block text-sm font-medium text-gray-700">
                  Website
                </label>
                <div class="flex mt-1 rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                    http://
                  </span>
                  <input type="text" name="company_website" id="company_website" class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="www.example.com">
                </div>
              </div>
            </div>
  
            <div>
              <label for="about" class="block text-sm font-medium text-gray-700">
                About
              </label>
              <div class="mt-1">
                <textarea id="about" name="about" rows="3" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
              </div>
              <p class="mt-2 text-sm text-gray-500">
                Brief description for your profile. URLs are hyperlinked.
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  
    <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:p-6">
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
          <p class="mt-1 text-sm text-gray-500">
            Use a permanent address where you can receive mail.
          </p>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
          <form action="#" method="POST">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
  
              <div class="col-span-6 sm:col-span-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
  
              <div class="col-span-6 sm:col-span-4">
                <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="text" name="email_address" id="email_address" autocomplete="email" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone number</label>
                <input type="text" name="phone_number" id="phone_number" autocomplete="tel" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
  
              <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
                <select id="country" name="country" autocomplete="country" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>United States</option>
                  <option>Canada</option>
                  <option>Mexico</option>
                </select>
              </div>
  
              <div class="col-span-6">
                <label for="street_address" class="block text-sm font-medium text-gray-700">Street address</label>
                <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
  
              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <input type="text" name="city" id="city" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
  
              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                <input type="text" name="state" id="state" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
  
              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  
   
  
    <div class="flex justify-end">
      <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Cancel
      </button>
      <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Save
      </button>
    </div>
  </div>
  
    @endsection
    @endsection