@extends('adm.layouts.app')

@section('content')
        <form class="row">
            <div class="input-field col s6">
                <input id="Titulo" type="text" name="title" class="validate">
                <label for="Titulo">Titulo</label>
            </div>
            <div class="input-field col s6">
                <input id="Texto" type="text" name="text" class="validate">
                <label for="Texto">Texto</label>
            </div>
            <div class="file-field input-field">
                <div class="btn">
                    <span>Imagen</span>
                    <input type="file" name="image">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <div class="file-field input-field">
                <div class="btn">
                    <span>Logo</span>
                    <input type="file" name="icon">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </form>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('text');
        CKEDITOR.config.width = '100%';
    </script>
@endsection
