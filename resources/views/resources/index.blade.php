<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{route('services.show', $service->id)}}">{{ $service->name }}</a> > Resources
        </h2>
    </x-slot>
    <div class="py-8">
        @foreach( $types as $type )
        <div class="grid grid-cols-1 gap-4 sm:px-6 lg:px-8 mb-4">
            <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800 dark:text-white/70 dark:ring-zinc-700">
                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/></g></svg>
                </div>
                
                <div class="pt-3 sm:pt-5 w-full">
                    <a href="{{route('services.resources.create', [$service->id, $type->id])}}" class="float-right bg-black text-white dark:bg-white dark:text-black px-2 rounded-full font-bold">
                        +
                    </a>
                    <h2 class="text-xl font-semibold text-black dark:text-white"> {{$type->name}}</h2>

                    <table class="min-w-full bg-white">
                        <thead class="bg-black text-white dark:bg-white dark:text-black">
                            <tr>
                                <th>Name</th>
                                <th>Uploaded at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @if( $service->resources->where('resource_type_id',$type->id)->isNotEmpty() )
                                @foreach( $service->resources as $resource )
                                    <tr class="odd:bg-white even:bg-slate-200">
                                        <td>{{$resource->name}}</td>
                                        <td>{{$resource->created_at}}</td>
                                        <td class="text-center">
                                            <a href="" class="ml-2"><i class="fas fa-eye"></i></a>
                                            <a href="" class="ml-2"><i class="fas fa-download"></i></a>
                                            <a href="" class="ml-2"><i class="fas fa-trash"></i></td></a>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td colspan="3">No resource available</td></tr>
                            @endif
                        </tbody>

                    </table>
                </div>
                
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
