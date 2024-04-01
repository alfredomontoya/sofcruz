@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px;">
        <div class='row'>
            <div class='col-md-12'>
                <div class="mt-3">
                    <a class="text-primary fw-bold fs-5 text-decoration-none" href="{{ route('user.index') }}" >Usuario</a> ›
                    <a class='text-success fw-bold fs-5 text-decoration-none' href='{{ route('user.show', $user->id) }}'>Usuario {{ $user->id  }}</a>
                </div>
            </div>

            <div class='col-md-12'>
                @include('user.fragments.show')
            </div>

            <div class="col-md-12 text-center mt-3">
                <a class="btn btn-success" href="{{ route('user.index') }}">Aceptar</a>
                <a class="btn btn-warning" href="{{ route('user.edit', $user->id) }}">Editar</a>
                <a type="button" class='btn btn-danger' data-bs-toggle="modal" data-bs-target="#delete_user{{ $user->id }}">Eliminar</a>
                @include('user.fragments.delete-modal')
            </div>

        </div>
    </div>
@endsection
