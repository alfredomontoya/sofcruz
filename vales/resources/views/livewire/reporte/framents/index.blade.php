<div >
    @if (isset($reporte_bitacora))
        @if($reporte_bitacora->count()>0)
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Reporte de usuarios,</strong> Se encontraron {{ $reporte_bitacora->count() }} registros, seleccione uno para vel el detalle.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <div class="bitacora-phone">
                <x-bitacora-cards :reportebitacora="$reporte_bitacora" />
            </div>
            <div class="bitacora-pc">
                <x-bitacora-table :reportebitacora="$reporte_bitacora" />
            </div>
        @else
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Reporte de usuarios,</strong> No se encontraron registros.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    @endif
</div>
