<div>
    <div class="h1 text-success fw-bold mb-5">
        Detalle funcionario  <strong>{{$funcionario->id }}</strong>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            {{-- DATOS FUNCIONARIO --}}
            <h5 class="card-title text-success fw-bold">Datos funcionario</h5>
            <div class="row justify-content-md-center">
                <div class="col">
                    <table class="table table-borderless table-hover table-sm">
                        <tbody>
                            <tr>
                                <td width='20%'><div class="p fw-bold text-end">Nro:</div></td>
                                <td>{{$funcionario->nro}}</td>
                            </tr>
                            <tr>
                            <td><div class="p fw-bold text-end">Cedula identidad:</div></td>
                            <td>{{$funcionario->ci}}</td>
                        </tr>
                        <tr>
                            <td><div class="p fw-bold text-end">Nombres:</div></td>
                            <td>{{$funcionario->nombres}}</td>
                        </tr>
                        <tr>
                            <td><div class="p fw-bold text-end">Apellidos:</div></td>
                            <td>{{$funcionario->apellidos}}</td>
                        </tr>
                        <tr>
                            <td><div class="p fw-bold text-end">Cargo:</div></td>
                            <td>{{$funcionario->cargo}}</td>
                        </tr>
                        <tr>
                            <td><div class="p fw-bold text-end">Edificio:</div></td>
                            <td>{{$funcionario->edificio}}</td>
                        </tr>
                        <tr>
                            <td><div class="p fw-bold text-end">Tipo Contrato:</div></td>
                            <td>{{$funcionario->tipo}}</td>
                        </tr>
                        <tr>
                            <td><div class="p fw-bold text-end">Estado entrega:</div></td>
                            <td>
                                @if ($funcionario->entregado==1)
                                    <span class="badge bg-success p-2" style="border-radius: 15px;">ENTREGADO</span>
                                @elseif ($funcionario->entregado==0)
                                    <span class="badge bg-secondary p-2" style="border-radius: 15px;">NO ENTREGADO</span>
                                @endif

                            </td>
                        </tr>
                        <tr>
                            <td><div class="p fw-bold text-end">Encargados:</div></td>
                            <td class="text-success fw-bold">{{$funcionario->responsable??""}}</td>
                        </tr>
                        <tr>
                            <td><div class="p fw-bold text-end">Teléfono Responsable:</div></td>
                            <td>{{$funcionario->telresponsable??''}}</td>
                        </tr>
                        <!--<tr>
                            <td><div class="p fw-bold">Telefono responsable:</div></td>
                            <td>{{$funcionario->telresponsable}} <a class="btn btn-success btn-sm" href="https://wa.me/591{{$funcionario->telresponsable}}">Enviar mensaje Wathsapp</a> </td>
                        </tr>-->

                        </tbody>
                    </table>
                </div>
            </div>

            {{-- DATOS ENTREGA --}}
            <h5 class="card-title text-success fw-bold">Datos entrega</h5>
            @if (isset($entrega))
                <div class="row justify-content-md-center">
                    <div class="col">
                        <table class="table table-borderless table-hover table-sm">
                            <tbody>
                                <tr>
                                    <td width='20%'><div class="p fw-bold text-end">Usuario:</div></td>
                                    <td>{{$entrega->user->email}}</td>
                                </tr>
                                <tr>
                                    <td width='20%'><div class="p fw-bold text-end">Descripcion:</div></td>
                                    <td>{{$entrega->descripcion}}</td>
                                </tr>
                                <tr>
                                    <td><div class="p fw-bold text-end">Foto:</div></td>
                                    <td>
                                        <img class="img-fluid rounded" style="width: 500px;" src="{{ asset('storage') }}/{{ $entrega->img }}" alt="">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="mt-3 text-center">
        <button wire:click.prevent='cancelShowFuncionario' class="btn btn-primary">Aceptar</button>
    </div>
</div>
