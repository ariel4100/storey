@extends('layouts.app')

@section('content')

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade mb-4" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    @area
    @slot('title','Nuestra Empresa ')
    @endarea
<div class="container my-4">
    <div class="row">
        <div class="col-md-8">
            <p>
                STOREY S.A. es líder en productos y servicios de alta tecnología, aportando soluciones a las demandas empresarias de modernización y actualización tecnológica.
                Gran experiencia en desarrollo de software y servicios a terceros. 	
                Presencia en toda Sudamérica 	
                Introdujimos en Argentina, el único sistema de transmisión por PLC pasando de MT a BT
                Instalamos y mantenemos el único sistema de telegestión por PLC que opera comercialmente desde el año 1999 en Argentina
                Fuimos pioneros en la introducción de medidores digitales para clientes residenciales en Argentina, Uruguay, Perú, Colombia y Paraguay
                Implementamos la medición de energía reactiva y demanda máxima en medidores monofásicos residenciales
                Somos la Empresa con mayor venta de medidores digitales de Argentina
                Fabricamos el equipamiento de calibración para nuestro laboratorio certificado
                Desarrollamos los software para la lectura y programación de los medidores
            </p>
        </div>
        <div class="col-md-4">
            <p>
            2.500.000
            llevamos + de dos millones quinientos mil medidores
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <h5>Mision Y Vision</h5>
            <p>
            STOREY SA desde su constitución en 1995 aporta soluciones pragmáticas a los requerimientos de modernización y re-equipamiento tecnológico, ofreciendo una amplia gama de productos y servicios con tecnología de última generación. Esta se amplía año tras año con el objetivo de ofrecer mayor integración a las soluciones existentes, satisfaciendo las necesidades del cliente en forma cada vez más completa. Mercados cada día más competitivos plantean nuevos desafíos, imposibles de superar sin la utilización de tecnología de avanzada. 
            </p>
        </div>
    </div>
</div>

@endsection
