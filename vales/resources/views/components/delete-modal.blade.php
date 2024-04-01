<a
    class='btn btn-{{ isset($size)? $size : "sm" }} btn-danger'
    data-bs-toggle='modal'
    data-bs-target="#delete-{{ $label }}-{{ $id }}"
>
    @if (isset($text))
        {{ $text }}
    @else
        <i class='fa-solid fa-trash'></i>
    @endif

</a>

<div class='modal fade' id='delete-{{ $label }}-{{ $id }}' tabindex='-1' aria-labelledby='DeleteModal' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>

            <div class='modal-header bg-danger'>
                <h5 class='modal-title text-white' id='exampleModalLabel'>Eliminar <span class="text-capitalize">{{ $label }}</span></h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>

            <div class='modal-body text-center'>
                Desea eliminar el registro con id: <strong class="text-danger">{{ $id }}</strong>
            </div>

            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                <button type='button' class='btn btn-danger' data-bs-dismiss='modal' wire:click="{{ $action }}">Aceptar</button>
            </div>
        </div>
    </div>
</div>
