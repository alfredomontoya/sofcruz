@extends('layouts.app')

@section('css')
<style>
     html, body{
      height:100%;
      margin: 0;
      display: flex;
      flex-direction: column;
      /* background: yellow; */
      justify-content: center;
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('images/quinta3.png') }}");
      background-attachment: fixed;
      background-position: center top;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .contenedor {
        width: 100%;
        height: 100%;
    }

    .login-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

</style>


@endsection


@section('content')

<div class="contenedor">
    <div class="login-container">
        <div style="height: 100%;">
            <div class="card" style="background: rgb(4, 214, 92, 0.3)">
                <div class="card-header bg-success text-white text-center h4" style="border: 0px;">{{ __('Autentificar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Usuario" value="{{ old('email') }}" required autocomplete="on" autofocus>
                            <label for="email" class="form-label text-success">{{ __('Usuario') }}</label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">
                            <label for="password" class="form-label text-success">{{ __('Password') }}</label>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <input type="hidden" name="estado" value="1">



                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">
                                    {{ "Ingresar" }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
