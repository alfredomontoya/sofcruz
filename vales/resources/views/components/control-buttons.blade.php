<div>
    <div class="mt-2 text-center">
        @if (isset($storeButton) && $storeButton)
            <button  class='btn btn-primary text-white' wire:click="{{ $storeButtonAction }}">Guardar</button>
        @endif

        @if (isset($updateButton) && $updateButton)
            <button  class='btn btn-primary text-white' wire:click="{{ $updateButtonAction }}">Actualizar</button>
        @endif

        @if (isset($cancelButton) && $cancelButton)
            <button  class='btn btn-secondary text-white' wire:click="{{ $cancelButtonAction }}">Cancelar</button>
        @endif

    </div>
</div>
