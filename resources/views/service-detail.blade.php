<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $service->name }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 gap-4">
                        {!! $service->description !!}
                    </div>
                    <span class="w-full block mt-4">
                        <a href="{{route('services.resources.index', $service->id)}}" class="bg-white dark:bg-black text:black dark:text:white rounded-md px-4 py-2 mx-auto">
                            View Learning Resources
                        </a>
                    </span>
                </div>
            </div>
        </div>
        
    </div>
</x-app-layout>
