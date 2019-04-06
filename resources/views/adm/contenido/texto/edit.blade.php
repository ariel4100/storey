@extends('adm.layouts.app')

@section('content')
    <p>
        <a href="{{route('contenido.list', ['seccion' => $contenido->section, 'tipo' => $contenido->type])}}"><< Volver</a>
    </p>
    <form class=" " action="{{ route('contenido.update',$contenido->id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="input-field col s12">
                    <input id="Titulo" type="text" name="title" class="validate" value="{!! $contenido->title !!}">
                    <label for="Titulo">Titulo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <p for="texto">Texto</p>
                    <textarea id="texto" name="text" class="materialize-textarea"> {!! $contenido->text !!}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field col m6 s12">
                    <div class="btn">
                        <span>Imagen</span>
                        <input type="file" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="file-field input-field col m6 s12">
                    <div class="btn">
                        <span>Logo</span>
                        <input type="file" name="icon">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
            <div class="row right">
                <button type="submit" class="btn">Editar</button>
            </div>
        </form>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('text');
        CKEDITOR.config.width = '100%';
    </script>
@endsection
