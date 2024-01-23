

   
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

        <p class="mb-3">
        <a href="{{ route('projecten.create')}}" class="underline">Nieuw project maken</a>
        </p>


    @foreach($projecten as $project)

            <article class="nextPage__card">
            <h2 class="nextPage__h2">{{$project->titel}}</h2>
            <figure class="nextPage__figureImg">
                <img src="{{$project->img}}" alt="" class="nextPage__img" />
            </figure>
            <p class="nextPage__p">
            {{$project->description}}
            </p>

            <figure class="nextPage__buttonWrapper">
                <a class="nextPage__arrowLink" href="{{route('projecten.show', $project)}}"
                ><button class="nextPage__arrowButton">
                    <i class="nextPage__arrowI fa-solid fa-arrow-right"></i></button
                ></a>
            </figure>

            </article>



    @endforeach

    </x-app-layout>
