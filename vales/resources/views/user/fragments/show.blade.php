<div class='card border-top border-success shadow'>

    <div class='card-header h4 text-success'>
        Datos usuario
    </div>

    <div class='card-body'>
        <div class='table-responsive'>
            <table class='table table-hover'>
                <tbody>
                    <tr>
                        <td scope='row' width='200' class='fw-bold text-success text-end'>Id:</td><td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td scope='row' class='fw-bold text-success text-end'>Nombre:</td><td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td scope='row' class='fw-bold text-success text-end'>Usuario:</td><td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td scope='row' class='fw-bold text-success text-end'>Rol:</td><td><span class="badge bg-secondary p-2 fs-6">{{ $user->role }}</span></td>
                    </tr>
                    <tr>
                        <td scope='row' class='fw-bold text-success text-end'>Estado:</td>
                        <td>
                            @if ($user->estado==1)
                                <span class="fs-4 text-success"><i class="fa-solid fa-thumbs-up"></i> Habilitado</span>
                            @else
                                <span class="fs-4 text-danger"><i class="fa-solid fa-thumbs-down"></i> Bloqueado</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td scope='row' class='fw-bold text-success text-end'>Fecha creación:</td><td>{{ $user->created_at->format('d/m/Y') }}</td>
                    </tr>
                    <tr>
                        <td scope='row' class='fw-bold text-success text-end'>Fecha modificación:</td><td>{{ $user->updated_at->format('d/m/Y')}}</td>
                    </tr>
               </tbody>
            </table>
        </div>
    </div>
</div>
