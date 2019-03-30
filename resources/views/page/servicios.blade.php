@extends('layouts.app')

@section('content')
    @area
    @slot('title','Servicios')
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
@endsection
