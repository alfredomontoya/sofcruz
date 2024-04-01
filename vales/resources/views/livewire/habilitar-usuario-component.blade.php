<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="form-check form-switch">
        <input wire:model='estado' wire:click='habilitar' class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault">
            @if ($estado==1)
                <span class="fs-4 text-success"><i class="fa-solid fa-thumbs-up"></i></span>
            @else
                <span class="fs-4 text-danger"><i class="fa-solid fa-thumbs-down"></i></span>
            @endif
        </label>
        @if (Session::has("message"))
            <span class="text-success fst-italic fw-bold">
                {{ session('message')['message'] }}
            </span>
        @endif
    </div>
</div>
