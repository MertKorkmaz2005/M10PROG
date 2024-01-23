

   
   <!-- Laravel App Layout -->
    <x-app-layout>
        <!-- Header Slot -->
        <x-slot name="header">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
        </x-nav-link>
        </x-slot>
        <x-slot name="header">
        <x-nav-link :href="route('projecten.index')" :active="request()->routeIs('dashboard')">
                {{ __('projecten') }}
        </x-nav-link>
        <h2>New project</h2>
        </x-slot>
        

        <!-- Main Content -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Projecten") }}
                    </div>
                </div>
            </div>
        </div>

        <form action="{{route('projecten.store')}}" method="POST">
            @csrf


                <div class="mt-8 max-w-md">
            

                    <div class="grid grid-cols-1 gap-6">

                    <label class="block">

                        <span class="text-gray-700">Titel</span>

                        <input type="text" name="titel" class="mt-1 block w-full" placeholder="">

                    </label>

                    <label class="block">

                        <span class="text-gray-700">img</span>

                        <input name="image" type="text" class="mt-1 block w-full" placeholder="">

                    </label>

                    <label class="block">

                        <span class="text-gray-700">Beschrijving</span>

                        <input type="text" name="description" class="mt-1 block w-full" placeholder="">

                    </label>
            
                    <button class="border" type="submit">Opslaan</button>

                    </div>

                </div>
      
          </form>

     

            

    </x-app-layout>
