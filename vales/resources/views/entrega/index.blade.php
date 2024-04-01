@extends('layouts.app')

{{-- @include('layouts.nav') --}}

@section('css')

@endsection

@section('content')
    <div class="container">

        @livewire('entrega-component')

    </div>

    {{-- @include('layouts.footer') --}}
@endsection

@section('javascript')

@endsection
