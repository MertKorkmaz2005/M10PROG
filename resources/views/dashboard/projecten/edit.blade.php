

   
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
        <h2>
            {{ __('Project:')}} {{ $project->titel}}
        </h2>
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
       

        <form action="{{route('projecten.update', ['projecten' => $project])}}" enctype="multipart/form-data" method="POST">
            @method('PUT')
            @csrf
                <div class="mt-8 max-w-md">
            

                    <div class="grid grid-cols-1 gap-6">

                    @include('dashboard.projecten._form', ['project' => $project])
                    
                    <button class="border" type="submit">Updaten</button>

                    </div>

                </div>
      
          </form>

          @if ($errors->any())
    <div class="p-2 bg-yellow border-2 rounded">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


     

            

    </x-app-layout>
