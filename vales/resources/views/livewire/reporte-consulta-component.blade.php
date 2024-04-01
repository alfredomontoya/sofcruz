<div style="margin-top: 80px;">
    {{-- Do your work, then step back. --}}
    
    <x-alert />
    @if ($show)
        <div class="card border-success shadow" style="border-top-width: 10px;">
            <div class="card-body">
                <h3 class='text-primary'>REPORTE DE USUARIOS</h3>
                @if (isset($reporte_bitacora))
                    @if($reporte_bitacora->count()>0)
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Reporte de usuarios,</strong> Se encontraron {{ $reporte_bitacora->count() }} registros.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="table-responsive bg-white">
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Ultima consulta</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reporte_bitacora as $i=>$reporte)
                                    <tr>
                                        <td>{{ $reporte->fecha }} </td>
                                        <td class="text-primary fw-bold">{{ $reporte->user->email }} </td>
                                        <td>{{ $reporte->count }} </td>
                                        <td>{{ "d" }} </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            </table>
                            {{-- {{ $gestiones->links() }} --}}
                        </div>

                    @else
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Reporte de usuarios,</strong> No se encontraron registros.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                @endif

            </div>
        </div>

    @endif

</div>
