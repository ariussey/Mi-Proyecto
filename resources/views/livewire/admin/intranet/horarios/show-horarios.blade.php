<div>
    {{-- {{$entidades}} --}}
    <!-- component -->
    
    <div class="w-full">
        <div class="flex items-center mb-4">
            <div class="relative flex-1">
                <input type="search" wire:model="buscador"
                    class="w-full pl-10 pr-4 py-2 rounded-lg shadow-md border border-gray-400 focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="Buscar...">
                <div class="absolute top-0 left-0 inline-flex items-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                    </svg>
                </div>
            </div>
            @livewire('admin.intranet.horarios.create-horario')
        </div>
        <div class="bg-white shadow-md rounded">
            @if ($horarios->count())
                <table class="table table-responsive">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 w-24 text-left cursor-pointer" wire:click="orden('id')">ID
                                {{-- Orden Sort --}}
                                @if ($sort == 'id')
                                    @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-down float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class="py-3 px-6 text-left cursor-pointer" wire:click="orden('dia')">Día
                               {{-- Orden Sort --}}
                                @if ($sort == 'dia')
                                    @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-down float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif 
                            </th>
                            <th class="py-3 px-6 text-left cursor-pointer" wire:click="orden('hora_inicio')">Hora Inicio
                                {{-- Orden Sort --}}
                                @if ($sort == 'hora_inicio')
                                    @if ($direccion == 'asc')
                                        <i class="fas fa-sort-alpha-down float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @endif
                                    
                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class="py-3 px-6 text-left cursor-pointer" wire:click="orden('hora_fin')">Hora Fin
                                {{-- Orden Sort --}}
                                @if ($sort == 'hora_fin')
                                    @if ($direccion == 'asc')
                                        <i class="fas fa-sort-alpha-down float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @endif
                                    
                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class="py-3 px-6 text-left cursor-pointer" wire:click="orden('enlace')">Enlace
                                {{-- Orden Sort --}}
                                @if ($sort == 'enlace')
                                    @if ($direccion == 'asc')
                                        <i class="fas fa-sort-alpha-down float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @endif
                                    
                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class="py-3 px-6 text-left cursor-pointer" wire:click="orden('id_moodle')">ID Moodle
                                {{-- Orden Sort --}}
                                @if ($sort == 'id_moodle')
                                    @if ($direccion == 'asc')
                                        <i class="fas fa-sort-alpha-down float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @endif
                                    
                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class="py-3 px-6 text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($horarios as $horario)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$horario->id}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">
                                        @switch($horario->dia)
                                            @case(1) {{$dia = 'Lunes'}} @break
                                            @case(2) {{$dia = 'Martes'}} @break
                                            @case(3) {{$dia = 'Miércoles'}} @break
                                            @case(4) {{$dia = 'Jueves'}} @break
                                            @case(5) {{$dia = 'Viernes'}} @break
                                            @case(6) {{$dia = 'Sábado'}} @break
                                            @case(7) {{$dia = 'Domingo'}} @break

                                            @default
                                            {{$dia = 'Null'}}
                                                
                                        @endswitch
                                        </span>
                                        
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$horario->hora_inicio}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$horario->hora_fin}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$horario->enlace}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{$horario->id_moodle}}</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        {{-- Visible --}}
                                        <div class="w-7 mr-2 border-gray-900 bg-blue-500 text-white border rounded-lg p-1 transform hover:text-purple-500 hover:bg-blue-700 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                        {{-- Editar --}}
                                        <button wire:click="edit({{$horario}})" class="w-7 mr-2 border-gray-900 bg-yellow-500 text-white border rounded-lg p-1 transform hover:text-purple-500 hover:bg-yellow-700 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </button>
                                        {{-- Eliminar --}}
                                        <div class="w-7 mr-2 border-gray-900 bg-red-500 text-white border rounded-lg p-1 transform hover:text-purple-500 hover:bg-red-700 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>   
                </table>
            @else
                <div class="px-6 py-4">
                    <b>No se encontró ningún registro...</b>
                </div>
            @endif
        </div>
    </div>
</div>
