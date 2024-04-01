<div>
    <h3>Consultas de usuario</h3>
    @if (isset($bitacoras))
        @if($bitacoras->count()>0)
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Reporte de usuarios,</strong> Se encontraron {{ $bitacoras->count() }} registros, seleccione uno para vel el detalle.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="table-responsive bg-white">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Busqueda</th>
                        <th scope="col">Hostname</th>
                        <th scope="col">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bitacoras as $i=>$bitacora)
                        <tr>
                            <td>{{ ($i+1) }} </td>
                            <td class="text-primary fw-bold">{{ $bitacora->user->email }} </td>
                            <td>{{ $bitacora->busqueda }} </td>
                            <td>{{ $bitacora->hostname }} </td>
                            <td>{{ $bitacora->created_at->format('d/m/Y H:i') }} </td>
                            {{-- <td>
                                <button wire:click="$set('mode', 'show')" class="btn btn-primary"><i class="fa-solid fa-eye"></i> Ver</button>
                            </td> --}}
                        </tr>
                    @endforeach

                </tbody>
                </table>
                {{ $bitacoras->links() }}
            </div>

        @else
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Reporte de usuarios,</strong> No se encontraron registros.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    @endif
    <button wire:click="$set('mode', 'index')" class="btn btn-primary">Aceptar</button>
</div>
