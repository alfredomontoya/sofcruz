@extends('layouts.app')


@section('content')
    <div class="container" style="margin-top: 80px;">
        <div class="mt-3 mb-3">
            <a href="{{ route('user.index') }}" class="text-primary fw-bold fs-5 text-decoration-none">Usuarios</a>
            <a  class='btn btn-primary float-end' href='{{ route('user.create') }}'>Nuevo</a>
        </div>

        <div class='mt-2 card border-success shadow' style="border-top-width: 10px;">
            <div class='card-body'>

                <div class='mt-3'>
                    @include('user.fragments.index')
                </div>

            </div>
        </div>
    </div>

@endsection


