<div style="margin-top: 80px;">
    {{-- Do your work, then step back. --}}
    <h3 class='text-primary fw-bold'><i class="fa-solid fa-gear"></i> CONFIGURACION DE LA APLICACION</h3>
    <x-alert />
    @if ($show)
        <div class="card border-success shadow" style="border-top-width: 10px;">
            <div class="card-body">
                @switch($mode)
                    @case("index")
                        <h3 class="text-primary" style="margin-bottom: 45px;">
                            LISTADO DE GESTIONES
                            <button wire:click='create' class="btn btn-primary float-end">Nuevo</button>
                        </h3>
                        @include('livewire.configuracion.fragments.gestiones')
                        @break
                    @case("create")

                        <h3 class="text-primary" style="margin-bottom: 45px;">
                            NUEVA GESTION
                            {{-- <button wire:click='create' class="btn btn-primary float-end">Nuevo</button> --}}
                        </h3>
                        @include('livewire.configuracion.fragments.gestiones-create')

                        @break
                    @case("edit")
                        <h3 class="text-primary" style="margin-bottom: 25px;">
                            EDITAR GESTION <span>{{ $gestion_id }}</span>
                            {{-- <button wire:click='create' class="btn btn-primary float-end">Nuevo</button> --}}
                        </h3>
                        @include('livewire.configuracion.fragments.gestiones-create')
                        @break
                    @default

                @endswitch
            </div>
        </div>

    @endif

</div>
