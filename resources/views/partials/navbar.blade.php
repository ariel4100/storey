<div class=" ">
    <div class="row" style="background-color: #F3F3F3; margin-bottom: 0px; padding: 5px">
        <div class="container">
            <div class="right" style="display: flex">
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

<nav class=" " style="border-bottom: 3px solid #009688; ">
    <div class="nav-wrapper" style="background-color: white">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons" style="color: #000;">menu</i></a>
        <div class="container" >
            <a class="brand-logo" href="{{ url('/') }}" style="color: #000;">
                STOREY
            </a>
            <ul class="right hide-on-med-and-down">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('empresa') }}">{{ __('Empresa') }}</a></li>
                    <li><a href="{{ route('productos') }}">{{ __('Productos') }}</a></li>
                    <li><a href="{{ route('descargas') }}">{{ __('Descargas') }}</a></li>
                    <li><a href="{{ route('medidas') }}">{{ __('Soluciones a Medida') }}</a></li>
                    <li><a href="{{ route('servicios') }}">{{ __('Servicios') }}</a></li>
                    <li><a href="{{ route('calidad') }}">{{ __('Calidad') }}</a></li>
                    <li><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
                    <li><a href="{{ route('contacto') }}">{{ __('Contacto') }}</a></li>
                    <li><a style="color: #009688" href="{{ route('login') }}"><i class="material-icons">search</i></a></li>
                    @if (!Route::has('register'))
                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
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

<ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('empresa') }}">{{ __('Empresa') }}</a></li>
    <li><a href="{{ route('productos') }}">{{ __('Productos') }}</a></li>
    <li><a href="{{ route('descargas') }}">{{ __('Descargas') }}</a></li>
    <li><a href="{{ route('medidas') }}">{{ __('Soluciones a Medida') }}</a></li>
    <li><a href="{{ route('servicios') }}">{{ __('Servicios') }}</a></li>
    <li><a href="{{ route('calidad') }}">{{ __('Calidad') }}</a></li>
    <li><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
    <li><a href="{{ route('contacto') }}">{{ __('Contacto') }}</a></li>
</ul>


