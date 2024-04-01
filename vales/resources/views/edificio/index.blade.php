@extends('layouts.app')

@include('layouts.nav')

@section('content')
    <div class="container">
    <div class="mt-3 fs-4 fw-semibold">
        <a href="{{ route('edificio.index') }}" class="text-dark fw-bold fs-5 text-decoration-none">Responsables Edificios</a>
        <a  class='btn btn-success float-end' href='{{ route('edificio.create') }}'>Nuevo</a>
    </div>

    <div class='mt-2 card border-4 border-top border-success'>
        <div class='card-body'>
            <div class='mt-3'>
                @include('edificio.fragments.index')
            </div>

        </div>
    </div>
</div>
@endsection
