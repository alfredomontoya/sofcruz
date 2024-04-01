<div class='table-responsive'>
    <table class='table table-sm table-striped datatable-index'>
        <thead class='bg-secondary'>
            <tr>
                 <th scope='col'>#</th>
                 <th scope='col'>ID</th>
                 <th scope='col'>Nombre</th>
                 <th scope='col'>Encargado</th>
                 <th scope='col'>Gestion</th>
                 <th scope='col' class='text-center'>Estado</th>
                 <th scope='col' class='text-end'>Opciones</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($edificios as $i => $edificio)
             <tr>
                <th scope='row'>{{ ($i + 1)}}</th>
                <td>{{ $edificio->id }}</td>
                <td>{{ $edificio->nombre }}</td>
                <td>{{ $edificio->encargado }}</td>
                <td>{{ $edificio->gestion }}</td>
                <td class='text-center'><span class="text-wrap badge bg-{{ json_decode($edificio->decode_estado)->color }}">{{ json_decode($edificio->decode_estado)->estado }}</span></td>
                <td class='text-end'>
                    <a class='link-dark' href="{{ route('edificio.show', $edificio->id) }}"><i class="fa-solid fa-eye"></i></a>
                    <a class='link-dark' href="{{ route('edificio.edit', $edificio->id) }}"><i class="fa-solid fa-pencil"></i></a>
                    <a type="button" class='link-danger' data-bs-toggle="modal" data-bs-target="#delete_{{ $edificio->id }}"><i class="fa-solid fa-trash"></i></a>
                     @include('edificio.fragments.delete-modal')
                </td>
             </tr>
          @endforeach
       </tbody>
    </table>
</div>
