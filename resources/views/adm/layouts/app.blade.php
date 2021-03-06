<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Changa:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @yield('style')
    <style>
        .sidenav li>a>i, .sidenav li>a>i.material-icons, .sidenav li>a li>a>[class*=mdi-] {
            color: darkgrey;
        }
    </style>
</head>
<body class="sidenav-open" style="font-family: changa">
    <div id="app">
        {{---@include('adm.partials.navbar')
        @include('adm.partials.sidebar')---}}
        <header>
            <div class="navbar-fixed">
                <nav class="navbar" style="background-color: white;" role="navigation">
                    <div class="nav-wrapper">
                        <a id="logo-container" href="#" class="brand-logo" style=" color: black !important;">@yield('title-section', 'Bienvenido')</a>
                        <a class="right" href="#" style=" color: black !important;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>
                        <a href="#"  data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="section">
                    @if (session('status'))
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card-panel green lighten-2">
                                    {!! session('status') !!}
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card red lighten-2">
                                    <div class="card-content white-text">
                                        <span class="card-title">Se encontraron los siguientes errores:</span>
                                        <ul style="margin-bottom: 0;">
                                            @foreach ($errors->all() as $error)
                                                <li>{!! $error !!}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @yield('content')

                </div>
            </div>
        </main>

        @sidenav([
        'items' => [
        [
        'text' => 'Home',
        'icon' => '<i class="material-icons">home</i>',
        'links'=> [
        [
        'to' => route('slider.list', ['seccion' => 'home']),
        'text'=> 'Slider'
        ],
        [
        'to' => route('contenido.list', ['seccion' => 'home', 'tipo' => 'texto']),
        'text'=> 'Contenido'
        ],
        ]
        ],
        [
        'text' => 'Empresa',
        'icon' => '<i class="material-icons">business</i>',
        'links'=> [
        [
        'to' => route('slider.list', ['seccion' => 'empresa']),
        'text'=> 'Slider'
        ],
        [
        'to' => route('contenido.list', ['seccion' => 'empresa', 'tipo' => 'texto']),
        'text'=> 'Contenido'
        ],
        [
        'to' => 'asdsad',
        'text'=> 'Linea de Tiempo'
        ],
        ]
        ],
        [
        'text' => 'Productos',
        'icon' => '<i class="material-icons">shopping_cart</i>',
        'links'=> [
        [
        'to' => 'asdsad',
        'text'=> 'Familias'
        ],
        [
        'to' => 'asdsad',
        'text'=> 'Productos'
        ],
        ]
        ],
        [
        'text' => 'Descagas',
        'icon' => '<i class="material-icons">archive</i>',
        'links'=> [
                [
                'to' => route('contenido.list', ['seccion' => 'descargas', 'tipo' => 'descagable']),
                'text'=> 'Contenido'
                ],
            ]
        ],
        [
        'text' => 'Soluciones a Medida',
        'icon' => '<i class="material-icons">archive</i>',
        'links'=> [
                [
                'to' => route('contenido.list', ['seccion' => 'soluciones', 'tipo' => 'descagable']),
                'text'=> 'Contenido'
                ],
            ]
        ],
        [
        'text' => 'Servicios',
        'icon' => '<i class="material-icons">archive</i>',
        'links'=> [
                [
                'to' => route('contenido.list', ['seccion' => 'servicio', 'tipo' => 'texto']),
                'text'=> 'Contenido'
                ],
            ]
        ],
        [
        'text' => 'Calidad',
        'icon' => '<i class="material-icons">archive</i>',
        'links'=> [
                [
                'to' => route('contenido.list', ['seccion' => 'calidad', 'tipo' => 'texto']),
                'text'=> 'Contenido'
                ],
            ]
        ],
        [
        'text' => 'Blogs',
        'icon' => '<i class="material-icons">archive</i>',
        'links'=> [
                [
                'to' => route('contenido.list', ['seccion' => 'descargas', 'tipo' => 'texto']),
                'text'=> 'Contenido'
                ],
            ]
        ],
        [
        'text' => 'Configuración',
        'icon' => '<i class="material-icons">build</i>',
        'links'=> [
        [
        'to' =>  'asdsad',
        'text'=> 'Logos'
        ],
        [
        'to' =>  'asdsad',
        'text'=> 'Redes Sociales'
        ],
        [
        'to' =>  'asdsad',
        'text'=> 'Información de la empresa'
        ],
        [
        'to' =>  'asdsad',
        'text'=> 'Metadatos y Open Graph'
        ],
        ]
        ],
        [
        'text' => 'Seguridad',
        'icon' => '<i class="material-icons">security</i>',
        'links'=> [
        [
        'to' =>  'asdsad',
        'text'=> 'Administrar Usuarios'
        ],
        /*[
        'to' => 'asdsad',
        'text'=> 'Bitacora'
        ],*/
        ]
        ],
        ]
        ])
        @endsidenav
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
    <script>
        M.AutoInit();
    </script>

    @yield('script')

</body>
</html>
