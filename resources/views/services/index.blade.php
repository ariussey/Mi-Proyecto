<x-app-layout>
    <div class="max-w-8xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
            @foreach ($services as $service)
                <article class="bg-white w-full h-40 shadow text-center rounded-md">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <a target="_blank" href="{{$service->url}}">
                            <i class="{{$service->icono}} fa-3x text-{{$service->color}}-500"></i>
                            <h1 class="text-2xl font-bold leading-8 text-{{$service->color}}-500">{{$service->name}}</h1>
                            <p class="text-sm text-gray-500 text-{{$service->color}}-500">{{$service->description}}</p>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-app-layout>