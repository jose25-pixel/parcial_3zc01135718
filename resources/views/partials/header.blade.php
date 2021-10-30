<nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            CRUZCODE, Sistema de Notas
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    
                @else
                    @if (auth()->user()->hasRoles([1]))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">{{ __('Usuarios') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('curso.index') }}">{{ __('Cursos') }}</a>
                    </li>
                    @endif
                    @if (auth()->user()->hasRoles([1,2]))    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('docente.index') }}">{{ __('Calificar') }}</a>
                    </li>
                    @endif
                    @if (auth()->user()->hasRoles([1,3]))    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('estudiante.index') }}">{{ __('Cursos') }}</a>
                    </li>
                    @endif
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nombre }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Seccion') }}</i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>