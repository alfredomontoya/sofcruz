<div class="table-responsive bg-white">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Usuario</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reportebitacora as $i=>$reporte)
                <tr>
                    <td>{{ ($i+1) }} </td>
                    <td>{{ $reporte->fecha }} </td>
                    <td class="text-primary fw-bold">{{ $reporte->user->email }} </td>
                    <td>{{ $reporte->count }} </td>
                    <td>
                        <button
                            wire:click="showBitacoraUsuario({{ $reporte->user->id }}, '{{ $reporte->fecha }}')"
                            class="btn btn-primary"
                        >
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{-- {{ $gestiones->links() }} --}}
</div>
