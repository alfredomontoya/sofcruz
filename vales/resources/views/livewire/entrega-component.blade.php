<div class="mt-3">
    @if ($show)
        <h3>Entrega a funcionario: {{ $funcionario->apellidos }}, {{ $funcionario->nombres }}</h3>
        <x-alert />
        {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <div class="row row-cols-4">
            <div class="mb-3">
                <label for="funcionario_id" class="form-label">Funcionario</label>
                <input
                    wire:model='funcionario_id'
                    type="text"
                    class="form-control {{ $errors->has('funcionario_id') ? 'is-invalid' : '' }}"
                    id="funcionario_id"
                    aria-describedby="emailHelp"
                >
                @error('funcionario_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input
                    wire:model='descripcion'
                    type="text"
                    class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}"
                    id="descripcion"
                    aria-describedby="emailHelp"
                >
                @error('descripcion') <div class="invalid-feedback">{{ $message }}</div> @enderror
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Foto</label>
                <input
                    wire:model='img'
                    type="file"
                    class="form-control {{ $errors->has('img') ? 'is-invalid' : '' }}"
                    id="img"
                    aria-describedby="emailHelp"
                >
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            @error('img') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button wire:click='store' class="btn btn-primary">Entregar</button>
        <button wire:click='cancelar' class="btn btn-primary">Cancelar</button>
    @endif
</div>
