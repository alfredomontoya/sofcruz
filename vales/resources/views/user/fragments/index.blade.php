<div class='table-responsive'>
    <table class='table table-striped datatable-index'>
        <thead class='bg-secondary'>
            <tr>
                 <th scope='col'>#</th>
                 <th scope='col'>ID</th>
                 <th scope='col'>Habilitado</th>
                 <th scope='col'>Nombre</th>
                 <th scope='col'>Correo</th>
                 <th scope='col'>Rol</th>
                 <th scope='col'>Created at</th>
                 
                 <th scope='col' class='text-end'>Opciones</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($users as $i => $user)
             <tr>
                <th scope='row'>{{ ($i + 1)}}</th>
                <td>{{ $user->id }}</td>
                <td>
                    @livewire('habilitar-usuario-component', ['user_id' => $user->id, 'estado' => $user->estado])
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if ($user->role=='admin')
                        <span class="badge bg-primary fs-6">{{ $user->role }}</span>
                    @else
                        <span class="badge bg-secondary fs-6">{{ $user->role }}</span>
                    @endif
                </td>
                <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                
                <td class='text-end'>
                    <a class='link-success fs-4' href="{{ route('user.show', $user->id) }}"><i class="fa-solid fa-eye"></i></a>
                    <a class='link-warning fs-4' href="{{ route('user.edit', $user->id) }}"><i class="fa-solid fa-pencil"></i></a>
                    {{-- <a type="button" class='link-danger fs-4' data-bs-toggle="modal" data-bs-target="#delete_{{ $user->id }}"><i class="fa-solid fa-trash"></i></a> --}}
                     @include('user.fragments.delete-modal')
                </td>
             </tr>
          @endforeach
       </tbody>
    </table>
</div>
