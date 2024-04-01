@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 80px;">
        <div class='row'>
            <span class="fs-4 mt-2 ">
                <a href="{{ route('user.index') }}" class="fw-bold text-primary text-decoration-none">Editar usuario</a> ›
                <a href="{{ route('user.edit', $user->id) }}" class="fw-bold text-success text-decoration-none">Usuario {{ $user->id }}</a>
            </span>
            <form class='col-md-12' action={{ route('user.update', $user->id) }}  method='POST' enctype='multipart/form-data'>
                @csrf
                @method('PUT')
                <div class="mt-3 card border-success shadow" style="border-top-width: 10px;">
                    <div class="card-body">
                        @include('user.fragments.form')
                    </div>
                </div>

                <div class="mt-2 text-center">
                    <button  class='btn btn-primary' type='submit'>Guardar</button>
                    <a class='btn btn-warning' href='{{ route('user.index') }}'>Cancelar</a>
                </div>
            </form>
        </div>
    </div>

@endsection


