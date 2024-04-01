@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px;">
        <div class='row'>
            <span class="mt-2">
                <a href="{{ route('user.index') }}" class="fw-bold fs-5 text-primary text-decoration-none">Usuario</a> ›
                <a href="{{ route('user.create') }}" class="fw-bold fs-5 text-success text-decoration-none">Crear Nuevo Usuario</a>
            </span>
            <col-md-12>
                @include('errors')
            </col-md-12>
            <form class='col-md-12 needs-validation' action={{ route('user.store') }}  method='POST' enctype='multipart/form-data' novalidate>
                @csrf
                @method('POST')
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
