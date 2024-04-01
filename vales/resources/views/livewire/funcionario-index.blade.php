<div style="margin-top: 60px;">
    <div class="cabecera-navidad">
        <div class="titulo text-success text-center fw-bold">{{ $gestion->titulo }}</div>
        <div class="mt-2 text-center" style="height: 200px;" ><img class="img-fluid" style="height: 200px;" src="{{ asset('images/picmix.com_154508.png') }}" alt=""></div>

        {{-- <div class="h3 text-success text-center fw-bold m-3">Buscar</div> --}}
        <div class="row justify-content-center">
            <div class="imagen mt-3">
                <div class="input-wrapper">
                    <input
                        type="search"
                        class="form-control form-control-lg input-icon"
                        placeholder="Apellidos, nombres, ó ci.."
                        wire:model.defer='search'
                    />
                    <div class="icon" style="">
                        <a class="inconlink" href="#" wire:click='render'>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                    </div>
                </div>

                {{-- <button wire:click="render" class=" mt-2 btn btn-success"><i class="fa-solid fa-magnifying-glass"></i> Buscar</button> --}}

                {{-- DROP DOWN SI HAY MAS DE UNA GESTION --}}
                {{-- @if ($gestiones->count() > 1)
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="">{{ $gestion->year }}</span>
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($gestiones as $gestion)
                            <li>
                                <a
                                    wire:click.prevent='setGestion({{ $gestion->id }})'
                                    class="dropdown-item"
                                    href="#"
                                >
                                    {{ $gestion->year }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif --}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="descripcion p text-secondary text-center mt-3">{{ $gestion->descripcion }}</div>
        </div>
    </div>

    @if (isset($funcionarios))
        @if($funcionarios->count()>0)
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Resultado de busqueda!</strong> Se encontraron {{ $funcionarios->total() }} registros, seleccione uno para vel el detalle.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            {{-- LISTADO FUNCIONARIO CARD PARA PANTALLAS DE TELEFONO --}}
            <div class="funcionario-list-card">
                @foreach ($funcionarios as $i=>$funcionario)
                    <div class="card mt-3 shadow" style="border-radius: 20px;">
                        <div class="card-header text-center bg-success text-white" style="border-radius: 20px 20px 0 0;">
                            <span class="fs-5 fw-bold">
                                {{ $i+1 }}. {{ $funcionario->detalle }}
                            </span>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="text-success fw-bold text-end">CEDULA DE IDENTIDAD:</td>
                                        <td>{{ $funcionario->ci }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-success fw-bold text-end">EDIFICIO:</td>
                                        <td>{{ $funcionario->edificio }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-success fw-bold text-end">GESTION:</td>
                                        <td>{{ $funcionario->gestion }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td class="text-success fw-bold text-end">ESTADO ENTREGA:</td>
                                        <td>
                                            @if ($funcionario->entregado==0)
                                                <span class="badge bg-secondary p-2" style="border-radius: 15px;" >NO ENTREGADO</span>
                                            @elseif($funcionario->entregado==1)
                                                <span class="badge bg-success p-2" style="border-radius: 15px;">ENTREGADO</span>
                                            @endif
                                        </td>
                                    </tr> --}}
                                    <tr>
                                        <td class="text-success fw-bold text-end">RESPONSABLE:</td>
                                        <td class="text-primary fw-bold">{{ $funcionario->responsable }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-success text-muted" style="font-style: italic;">ID: {{ $funcionario->id }}</td>
                                    </tr>
                                </tbody>

                            </table>
                            {{-- @if ($funcionario->entregado==0)
                                <div class="text-center">
                                    <a href="#" wire:click.prevent='entregar({{ $funcionario->id }})' class="btn btn-success">Entregar</a>
                                </div>
                            @endif --}}
                        </div>
                    </div>
                @endforeach
                <div class="justify-content-md-center mt-3">
                    {{ $funcionarios->links() }}
                </div>
            </div>

            {{-- LISTADO FUNCIONARIOS TABLA PARA PANTALLAS DE COMPUTADORAS --}}
            <div class="funcionario-list-table">
                <div class="table-responsive bg-white">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">CI</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Edificio</th>
                            <th scope="col">Gestion</th>
                            <th scope="col">Responsable</th>
                            {{-- <th scope="col" class="d-none d-lg-block">Opciones</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($funcionarios as $i=>$funcionario)
                            <tr>
                                <td>{{ $funcionario->id }} </td>
                                <td><a class="link-success" href="#" wire:click.prevent='showFuncionario({{ $funcionario->id }})'> {{ $funcionario->ci }} </a></td>
                                <td>{{ $funcionario->nombres }} </td>
                                <td>{{ $funcionario->apellidos }}</td>
                                <td>{{ $funcionario->edificio }} </td>
                                <td class="text-success fw-bold">{{ $funcionario->gestion }}</td>
                                <td class="text-primary fw-bold">
                                    {{-- @if ($funcionario->entregado==0)
                                        <span class="badge bg-secondary p-2" style="border-radius: 15px;" >NO ENTREGADO</span>
                                    @elseif($funcionario->entregado==1)
                                        <span class="badge bg-success p-2" style="border-radius: 15px;">ENTREGADO</span>
                                    @endif --}}
                                    {{ $funcionario->responsable }}
                                </td>
                                {{-- <td>
                                    <div class="text-right">

                                        @if ($funcionario->entregado==0)
                                            <a href="#" wire:click.prevent='entregar({{ $funcionario->id }})' class="btn btn-sm btn-primary">Entregar</a>
                                        @endif
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach

                    </tbody>
                    </table>
                    <div class="container text-center">
                            {{ $funcionarios->links() }}
                    </div>

                </div>
            </div>

        @else
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Resultado de busqueda!</strong> No se encontraron registros.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    @endif
</div>
