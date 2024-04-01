@extends('livewire-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-danger text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="card mt-3 shadow">
                <div class="card-header bg-danger text-white fw-bold fs-5"> USUARIOS </div>
                <div class="card-body">
                    <livewire:user-component />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
