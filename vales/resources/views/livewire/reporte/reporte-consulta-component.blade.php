<div style="margin-top: 30px;">
    {{-- Do your work, then step back. --}}

    <x-alert />
    @if ($show)


        <div class="card border-success shadow" style="border-top-width: 10px;">
            <div class="card-body">
                <h3 class="text-primary">REPORTE DE USUARIOS</h3>

                @switch($mode)
                    @case("index")
                        @include('livewire.reporte.framents.index')
                        @break
                    @case("show")
                        @include('livewire.reporte.framents.show')
                        @break
                    @default

                @endswitch



            </div>
        </div>

    @endif

</div>
