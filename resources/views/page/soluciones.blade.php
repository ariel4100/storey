@extends('layouts.app')

@section('content')
    @area
    @slot('title','Soluciones a Medida')
    @endarea
    <div class="container">
        <div class="row">
            <div class="col s12 m6">

            </div>
            <div class="col s12 m6">
                <div class="" style="padding: 10px; border-left: 5px solid #00254D; background-color: #F3F3F3; display: flex; justify-content: center; align-items: center;">
                    <i class="material-icons medium" style="color: #008780">file_download</i>
                    <div class=" " style="padding-left: 5px">
                        <p style="margin-bottom: 0px">I am a very simple card. I am good at containing small bits of information.</p>
                        <a href="#">Ver Documento</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="background-color: #F5F5F5; padding-top: 50px; padding-bottom: 50px">
        <h4 class="center">¿Necesitas Asesoramiento?</h4>
        <p class="center">Contáctanos y te brindaremos toda la información que necesites</p>
        <div class="col m3 s12"></div>
        <form class="col s12 m6">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                    <label for="disabled">Disabled</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                  <button class="btn waves-effect">Enviar</button>
                </div>
            </div>
        </form>
        <div class="col m3 s12"></div>
    </div>
@endsection
