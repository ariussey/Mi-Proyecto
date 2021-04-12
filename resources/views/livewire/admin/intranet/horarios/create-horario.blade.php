<div>
    {{-- <button class="ml-4 bg-green-600 hover:bg-green-700 text-white font-bold uppercase text-sm leading-normal py-2 px-6 rounded-lg">
        Agregar entidad
      </button> --}}

      <x-jet-danger-button wire:click="$set('open', true)" class="ml-4">Agregar horario</x-jet-danger-button>

      <x-jet-dialog-modal wire:model="open">
          <x-slot name="title">
            Crear Horario
          </x-slot>

          <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Día"/>
                <x-jet-input type="text" class="w-full border border-gray-400" wire:model.defer="dia"/>
                <x-jet-input-error for="dia" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Hora Inicio"/>
                <x-jet-input type="text" class="w-full border border-gray-400" wire:model.defer="hora_inicio" wire:keydown.enter="guardar"/>
                <x-jet-input-error for="hora_inicio" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Hora Fin"/>
                <x-jet-input type="text" class="w-full border border-gray-400" wire:model.defer="hora_fin"/>
                <x-jet-input-error for="hora_fin" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Enlace"/>
                <x-jet-input type="text" class="w-full border border-gray-400" wire:model.defer="enlace"/>
                <x-jet-input-error for="enlace" />
            </div>
            <div class="mb-4">
                <x-jet-label value="ID Moodle"/>
                <x-jet-input type="text" class="w-full border border-gray-400" wire:model.defer="id_moodle" wire:keydown.enter="guardar"/>
                <x-jet-input-error for="id_moodle" />
            </div>
          </x-slot>

          <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="guardar" wire:loading.attr="disabled" wire:target="guardar" class="disabled:opacity-25">
                Agregar horario
            </x-jet-danger-button>
            {{-- <span wire:loading wire:target="guardar">Creando...</span> --}}
          </x-slot>
        </x-jet-dialog-modal>
</div>