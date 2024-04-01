
@if (isset($gestiones))
        @if($gestiones->count()>0)
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Resultado de busqueda!</strong> Se encontraron {{ $gestiones->total() }} registros, seleccione uno para vel el detalle.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="table-responsive bg-white">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Gestion</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Funcionarios</th>
                        <th scope="col">Estado</th>
                        <th scope="col" class="d-none d-lg-block">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gestiones as $i=>$gestion)
                        <tr>
                            <td>{{ $gestion->id }} </td>
                            <td>{{ $gestion->year }} </td>
                            <td>{{ $gestion->titulo }}</td>
                            <td>{{ $gestion->descripcion }} </td>
                            <td>{{ $gestion->count_funcionarios }} </td>
                            <td class="text-success fw-bold">
                                <div class="form-check form-switch">
                                    <input
                                        wire:click='activar({{ $gestion->id }})'
                                        class="form-check-input"
                                        type="checkbox"
                                        role="switch"
                                        id="flexSwitchCheckChecked{{ $gestion->id }}"
                                        {{ ($gestion->estado==1)? 'checked': '' }}
                                    >
                                    {{-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> --}}
                                </div>
                            </td>

                            <td>
                                {{-- OPCIONES --}}
                                <button class="btn btn-warning btn-sm" wire:click='edit({{ $gestion->id }})'><i class="fa-solid fa-pen-to-square"></i></button>
                                {{-- <div class="text-right">
                                    <div class="col-md-3">
                                        <div>
                                            <label
                                                for="file-upload"
                                                style=" border: 1px solid #ccc;
                                                display: inline-block;
                                                padding: 6px 12px;
                                                cursor: pointer;
                                                width: 110px;
                                                border-radius: 10px;
                                                background: #3B71CA;
                                                color: white;"
                                            >
                                                <i class="fa-solid fa-table"></i> Importar
                                            </label>
                                            <input
                                                wire:model='file'
                                                id="file-upload"
                                                style="display: none;"
                                                type="file"
                                                accept="*"
                                            />
                                        </div>
                                    </div>
                                </div> --}}

                            </td>
                        </tr>
                    @endforeach

                </tbody>
                </table>
                {{ $gestiones->links() }}
            </div>

        @else
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Resultado de busqueda!</strong> No se encontraron registros.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    @endif
