<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class=" text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }} ❤️
                </div>

                <hr class="py-5">  

                <div class="flex gap-3">
                    <h3>Action: </h3>
                    <a class="text-white" href="{{route('users.create')}}" :active="request()->routeIs('dashboard')">
                        <button class="bg-blue-500 rounded-sm px-2 transition hover:bg-blue-600">       Créer</button>
                     </a>
                </div>
            </div>
        </div>
    </div>
    

    
</x-app-layout>
