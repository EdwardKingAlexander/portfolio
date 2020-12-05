<!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
<div class="bg-white">
  <div class="max-w-screen-xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
    <div>
      <h2 class="text-base leading-6 font-semibold text-blue-600 uppercase tracking-wide">Everything you need</h2>
      <p class="mt-2 text-3xl leading-9 font-extrabold text-gray-900">All-in-one platform</p>
      <p class="mt-4 text-lg leading-7 text-gray-500">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
    </div>

    <div class="mt-12 lg:mt-0 lg:col-span-2">
      <dl class="space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:grid-rows-4 sm:grid-flow-col sm:gap-x-6 sm:gap-y-10 lg:gap-x-8">
      <x-services service="Service">
          Service information here
        </x-services>

        <x-services service="Service">
          Service information here
        </x-services>

        <x-services service="Service">
          Service information here
        </x-services>

        <x-services service="Service">
          Service information here
        </x-services>
    

        <x-services service="Calendar">
          You can manage phone, email and chat conversations all from a single mailbox.
        </x-services>
    
      </dl>
    </div>
  </div>
</div>
