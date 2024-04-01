
{{-- <div style="display: inline;"> --}}
    @if ($icon)
        <button
            class='btn btn-sm btn-danger text-white'
            data-bs-toggle='modal'
            data-bs-target="#{{ $idd }}"
        >
            <i class='fa-solid fa-trash'></i>
        </button>
    @else
        <button
            class='btn btn-danger text-white'
            data-bs-toggle='modal'
            data-bs-target="#{{ $idd }}"
        >
            Eliminar
        </button>
    @endif


    <div
        class='modal fade'
        id='{{ $idd }}'
        tabindex='-1'
        aria-labelledby='DeleteModal'
        aria-hidden='true'
    >
        <div class='modal-dialog'>
            <div class='modal-content'>

                <div class='modal-header bg-danger'>
                    <h5 class='modal-title text-white' id='exampleModalLabel'><span class="text-capitalize">Eliminar {{ $title }}</span></h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>

                <div class='modal-body text-center'>
                    Desea eliminar el registro {{ $title }}:  <strong class="text-danger">{{ $idd }}</strong>
                </div>

                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal' wire:click="{{ $action }}">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

{{-- </div> --}}


