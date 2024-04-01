<nav class="navbar navbar-expand-md fixed-top shadow-sm" style="background: rgb(5,145,82);">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ url('/') }}">
            S.T.M.S.C.
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto text-white">
                {{-- Comité Electoral 2023 <br>Sindicato de Trabajadores Municipales <br> De Santa Cruz --}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ "LOGIN" }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    -->
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ strtoupper(Auth::user()->name) }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('funcionario.index') }}">Funcionarios</a></li>
                            @guest
                            @else
                                @if ( in_array(Auth::user()->email, ['cpizarroso', 'amontoya'], true) || Auth::user()->role=='admin')
                                    <li><a class="dropdown-item" href="{{ route('user.index') }}"><i class="fa-solid fa-user"></i> Adm. Usuarios</a></li>
                                    <li><a class="dropdown-item" href="{{ route('configuracion.index') }}"><i class="fa-solid fa-gear"></i>&nbsp;Configuracion</a></li>
                                @endif
                            @endguest
                            <li><hr class="dropdown-divider"></li>
                            <li>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>


                        </ul>

                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
