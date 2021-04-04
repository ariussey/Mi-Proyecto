<div>
    {{-- <button class="ml-4 bg-green-600 hover:bg-green-700 text-white font-bold uppercase text-sm leading-normal py-2 px-6 rounded-lg">
        Agregar entidad
      </button> --}}

      <x-jet-danger-button wire:click="$set('open', true)" class="ml-4">Agregar entidad</x-jet-danger-button>

      <x-jet-dialog-modal wire:model="open">
          <x-slot name="title">
            Crear Entidad
          </x-slot>

          <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre de la entidad"/>
                <x-jet-input type="text" class="w-full border border-gray-400" wire:model.defer="nombre" wire:keydown.enter="guardar"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Estado"/>
                <!-- component -->
<style>
  /* CHECKBOX TOGGLE SWITCH */
  /* @apply rules for documentation, these do not work as inline style */
  .toggle-checkbox:checked {
    @apply: right-0 border-green-400;
    right: 0;
    border-color: #68D391;
  }
  .toggle-checkbox:checked + .toggle-label {
    @apply: bg-green-400;
    background-color: #68D391;
    
  }
  </style>
                 
                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-1000 ease-in">
                    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                </div>
                <label for="toggle" class="text-xs text-gray-700">Toggle me.</label>
                <x-jet-input type="text" class="w-full border border-gray-400" wire:model.defer="estado" wire:keydown.enter="guardar"/>
            </div>
          </x-slot>

          <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="guardar">
                Agregar entidad
            </x-jet-danger-button>
          </x-slot>
        </x-jet-dialog-modal>
</div>
