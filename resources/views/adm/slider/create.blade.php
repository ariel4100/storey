@extends('adm.layouts.app')

@section('content')
    <div class="left-align">
        <a class=" " href="{{ route('slider.list', ['seccion' => $section]) }}"><< Volver</a>
    </div>
    <div class=" ">
        <form class="row" method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" value="{{$tipo}}">
            <input type="hidden" name="section" value="{{$section}}">
            <div class="input-field col s12 m6">
                <input
                        type="text"
                        id="title"
                        name="title"
                        class="validate{{ $errors->has('title') ? ' invalid' : '' }}"
                        value="{{ old('title', isset($element) ? $element->title : null) }}"
                        {{--required--}}
                >
                <label for="title">Titulo</label>
            </div>

                <div class="input-field col s12 m6">
                    <input type="text" id="order" name="order" class="validate{{ $errors->has('order') ? ' invalid' : '' }}" value="{{ old('order', isset($slider) ? $slider->order : null) }}"{{--required--}}>
                    <label for="order">Orden</label>
                </div>
            <div class="col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Imagen</span>
                        <input type="file" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
            <div class="right-align">
                <button type="submit" class="waves-effect waves-light btn"><i class="material-icons left">add</i> Añadir</button>
            </div>
        </form>
    </div>
@endsection
