@extends('layouts.app')

{{-- @include('layouts.nav') --}}

@section('css')
<style>
    .busqueda-container {
      /* The image used */
      /* background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("https://i.ytimg.com/vi/SzqiR5_Vojc/maxresdefault.jpg"); */

      /* Set a specific height */
      /* min-height: px; */

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
    }



    @media screen and (max-width: 1490px) {
        .login-container{
            min-height: 720px;
        }
    }

    @media screen and (max-width: 720px) {
        .login-container{
            min-height: 500px;
        }
    }

</style>
@endsection

@section('content')
    {{-- <div class="busqueda-container"> --}}
        <div class="container">
            {{-- @include('funcionario.fragments.index') --}}
            @livewire('funcionario-component')
        </div>
    {{-- </div> --}}

    {{-- @include('layouts.footer') --}}
@endsection

@section('javascript')

@endsection
