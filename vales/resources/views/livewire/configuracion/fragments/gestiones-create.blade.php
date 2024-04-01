

<div class="mb-3">
    @if ($mode=='edit')
        <input type="hidden" wire:model='gestion_id'>
    @endif
    <label for="year" class="form-label">Gestión</label>
    <input
        wire:model='year'
        type="text"
        class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}"
        id="year"
        placeholder="Gestión"
    >
    @error('year') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
    <input
        wire:model='titulo'
        type="text"
        class="form-control {{ $errors->has('titulo') ? 'is-invalid' : '' }}"
        id="titulo"
        placeholder="Titulo"
    >
    @error('titulo') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <textarea
        wire:model='descripcion'
        class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}"
        id="descripcion"
        rows="3"
    ></textarea>
    @error('descripcion') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>
    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <span id="span" wire:loading>
                    <div id="spinner" class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </span>
                <input wire:model='file' type="file" name="" id="">
                <button wire:click='importarFuncionarios({{ $gestion_id }})'>Importar</button>
            </div>
            <div class="col-md-6">
                <p class="fs-3 text-secondary"><span class="text-primary fw-bold">
                    {{ $count_funcionarios }}</span> funcionarios en esta gestion
                    <a href="#" class="btn btn-primary" wire:click.prevent='actualizarCountFuncionarios({{ $gestion_id }})' class="btn btn-primary"><i class="fa-solid fa-rotate"></i></a>
                </p>
            </div>
        </div>

    </div>
<div>
    @if ($mode=='create')
        <button wire:click='store' class="btn btn-primary">Guardar</button>
        <button wire:click='cancelCreate' class="btn btn-warning">Cancelar</button>
    @elseif($mode=='edit')
        <button wire:click='update' class="btn btn-primary">Actualizar</button>
        <button wire:click='cancelCreate' class="btn btn-warning">Aceptar</button>
    @endif
</div>
