<div class="row">
    @php
            $fecha_anterior = $reportebitacora[0]->fecha??null;
    @endphp
    <div class="col-12 fs-5 fw-bold">{{ $fecha_anterior }}</div>
    @foreach ($reportebitacora as $i=>$reporte)
        @if ($fecha_anterior && $fecha_anterior<>$reporte->fecha)
            <div class="col-12 fs-5 fw-bold" style="margin-top: 35px;">{{ $reporte->fecha }}</div>
        @endif
        <div class="col-auto">
                <a style="cursor: pointer;" wire:click.prevent="showBitacoraUsuario({{ $reporte->user->id }}, '{{ $reporte->fecha }}')">
                <div class="card shadow m-2 border-white" style="width:  260px;">
                    <div class="card-body bg-white">
                        <div class="row">
                            <div class="col-auto" style="width: 180px;">
                                <div class="bitacora-title">
                                    {{ ($i+1) }}. {{ $reporte->user->email }}
                                </div>
                                <div class="bitacora-text">
                                    <i class="fa-solid fa-circle" style="color: rgb(44, 44, 128)"></i>
                                    {{ $reporte->user->name }}
                                </div>
                            </div>
                            <div class="col-auto" style="width: 60px;">
                                <div class="bitacora-badge">
                                    {{ $reporte->count }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @php
            $fecha_anterior = $reporte->fecha
        @endphp
    @endforeach
    {{-- {{ $gestiones->links() }} --}}
</div>
