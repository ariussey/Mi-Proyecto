<div>
    <div class="bg-gray-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex {{--grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8--}}">
            <button class="bg-white shadow h-12 px-4 rounded text-gray-500 mr-4 focus:outline-none" wire:click="resetFilters">
                <i class="fas fa-newspaper mr-2"></i>
                Todas las Noticias
            </button>

            <!-- component -->

            <!-- Dropdown Categorias -->
            <div class="relative" x-data="{open: false}">
                <button class="bg-white px-4 block h-12 rounded overflow-hidden focus:outline-none text-gray-500 mr-4 shadow" x-on:click="open=!open">
                    <i class="fas fa-folder-open mr-2"></i>
                    Categorías
                    <i class="fas fa-angle-down ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute w-40 mt-1 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
    
                    @foreach ($categories as $category)
                    
                    <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-green-500 hover:text-white" wire:click="$set('category_id' ,{{$category->id}})" x-on:click="open = false">{{$category->name}}</a>

                    @endforeach
                    
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown Categorias -->

            <!-- Dropdown Etiquetas -->
            <div class="relative" x-data="{open: false}">
                <button class="bg-white px-4 block h-12 rounded overflow-hidden focus:outline-none text-gray-500 mr-4 shadow" x-on:click="open=!open">
                    <i class="fas fa-tags mr-2"></i>
                    Etiquetas
                    <i class="fas fa-angle-down ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute w-40 mt-1 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                    
                    @foreach ($tags as $tag)
                    <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-green-500 hover:text-white" wire:click="$set('tag_id' ,{{$tag->id}})" x-on:click="open = false">{{$tag->name}}</a>
                    @endforeach

                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown Etiquetas -->

        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($noticias as $noticia)

            <x-noticia-card :noticia="$noticia"/>

            

        @endforeach
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{$noticias->links()}}
    </div>
</div>
