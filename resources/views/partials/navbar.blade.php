<div class="container-fluid">
    <div class="row" style="background-color: #F3F3F3">
        <div class="container">
            <div class="d-flex bd-highlight">
                <div class="mr-auto p-2 bd-highlight"> </div>
                <div class="p-2 bd-highlight">
                    <a href="">1232456789</a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="">ZONA PRIVADA</a>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="border-bottom: 3px solid #009688; ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            STOREY
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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('empresa') }}">{{ __('Empresa') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos') }}">{{ __('Productos') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('descargas') }}">{{ __('Descargas') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('medidas') }}">{{ __('Soluciones a Medida') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('servicios') }}">{{ __('Servicios') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('calidad') }}">{{ __('Calidad') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">{{ __('Blog') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">{{ __('Contacto') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #009688" href="{{ route('login') }}"><i class="fas fa-search"></i></a>
                    </li>
                    @if (!Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
