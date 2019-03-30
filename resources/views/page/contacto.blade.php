@extends('layouts.app')
@push('style')
    <style>
        .collection .collection-item {
            border-bottom: unset;
            padding: unset;
            padding-top: 10px;
        }
    </style>
@endpush
@section('content')
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13157.001990182554!2d-58.5673497074707!3d-34.471169075548865!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe92486a50fe7be2!2sStorey+S.A.!5e0!3m2!1ses-419!2sar!4v1553973246722!5m2!1ses-419!2sar" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <ul class="collection" style="border: unset;">
                    <li class="collection-item" style="display: flex;">
                        <i class="material-icons small" style="margin-right: 10px">location_on</i>
                        <span class="title">Uruguay 3552 (1643) San Isidro Buenos Aires, Argentina</span>
                    </li>
                    <li class="collection-item" style="display: flex;">
                        <i class="material-icons small" style="margin-right: 10px">phone_in_talk</i>
                        <span class="title">(5411) 4723-3500 <br>(5411) 5432-3500 <br>(5411) 4723-3555</span>
                    </li>
                    <li class="collection-item" style="display: flex;">
                        <i class="material-icons small" style="margin-right: 10px">email</i>
                        <span class="title">info@storey.com.ar</span>
                    </li>
                </ul>
            </div>
            <div class="col s12 m8">
                <form class="">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Nombre</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Apellido</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="Telefono" type="text" class="validate">
                            <label for="Telefono">Telefono</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Sector</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="input-field col s12 m6">
                            <p>
                                <label>
                                    <input type="checkbox" />
                                    <span>Acepto los términos y condiciones de privacidad</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button class="btn waves-effect">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
