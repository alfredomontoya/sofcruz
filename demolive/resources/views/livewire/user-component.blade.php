<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @if (Session::has('message'))
        <div class="alert alert-info">
            {{ session('message')['message'] }}
        </div>

    @endif
    <div class="m-2" x-data x-init="$refs.search.focus()">
        <input
            x-ref="search"
            type="search"
            wire:model='search'
            class="form-control"
            placeholder="Buscar"
        >
        <div class="text-center">
            <button wire:click='buscar' class="btn btn-danger m-2">Buscar</button>
        </div>
    </div>
    @isset($users)
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    @endisset
</div>
