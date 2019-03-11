@extends('layouts.app')

@section('content')
    @area
    @slot('title','Soluciones a Medida')
    @endarea
<div class="container my-4">
    <div class="row">
        <div class="col-md-5">
        
        </div>
        <div class="col-md-7">
            <p>
            Somos líderes en productos y servicios de alta tecnología, aportando soluciones a las demandas empresarias de modernización y actualización tecnológica.
            Somos especialistas en la fabricación del equipamiento de calibración para nuestro laboratorio certificado.
            Además desarrollamos los software para la lectura y programación de los medidores. Trabajamos teniendo en cuenta las necesidades de nuestros clientes y buscamos soluciones inteligentes adecuadas a cada empresa.
            </p>
        </div>
    </div>
</div>
<div class="card z-depth-0" style="background-color: #F3F3F3">
    <div class="card-body container my-5" style="padding: 0.5rem;   color: #00254C">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h5 class="text-center">¿Necesitás Asesoramiento?</h5>
                <p class="text-center">
                Contáctanos y te brindaremos toda la información que necesites
                </p>
                <form class="text-center" style="color: #757575;">

                    <!-- Name -->
                    <div class="md-form mt-3">
                        <input type="text" id="materialContactFormName" class="form-control">
                        <label for="materialContactFormName">Name</label>
                    </div>

                    <!-- E-mail -->
                    <div class="md-form">
                        <input type="email" id="materialContactFormEmail" class="form-control">
                        <label for="materialContactFormEmail">E-mail</label>
                    </div>
        
                    <!-- Empresa -->
                    <div class="md-form mt-3">
                        <input type="text" id="materialContactFormEmpresa" class="form-control">
                        <label for="materialContactFormEmpresa">Empresa</label>
                    </div>

                    <!--Message-->
                    <div class="md-form">
                        <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                        <label for="materialContactFormMessage">Message</label>
                    </div>

                    <!-- Default unchecked -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Termino y Condicioines</label>
                    </div>
                    <!-- Send button -->
                    <button class="btn btn-info  z-depth-0 my-4 waves-effect" type="submit">Enviar</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
