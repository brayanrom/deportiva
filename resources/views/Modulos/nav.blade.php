<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Deportiva Digital</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Ver Registros
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('actividad.index') }}">Actividades</a></li>
                    <li><a class="dropdown-item" href="{{ route('municipios.index') }}">Municipios</a></li>
                    <li><a class="dropdown-item" href="{{ route('estados.index') }}">Estados</a></li>
                    <li><a class="dropdown-item" href="{{ route('personas.index') }}">Personas</a></li>
                    <li><a class="dropdown-item" href="{{ route('familias.index') }}">Familias</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Registrar
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('actividad.create') }}">Actividades</a></li>
                  <li><a class="dropdown-item" href="{{ route('municipios.create') }}">Municipios</a></li>
                  <li><a class="dropdown-item" href="{{ route('estados.create') }}">Estados</a></li>
                  <li><a class="dropdown-item" href="{{ route('personas.create') }}">Personas</a></li>
                  <li><a class="dropdown-item" href="{{ route('familias.create') }}">Familias</a></li>
                </ul>
            </li>
            </ul>
          </div>
           @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </div>

      </nav>
