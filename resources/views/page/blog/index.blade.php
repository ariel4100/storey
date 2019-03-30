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
    @area
    @slot('title','Blog')
    @endarea
<div class="container">
    <div class="row">
        <div class="col s12 m9">

        </div>
        <div class="col s12 m3">
            <form class=" " style="display: flex; justify-content: center; align-items: center">
                <div class="input-field " style="width: 100%">
                    <input id="icon_prefix2" style="width: 100%" type="text" class="validate" placeholder="Buscar...">
                </div>
                <i class="material-icons prefix  ">search</i>
            </form>
            <h6 style="color: #00254D;">CATEGORIAS</h6>
            <hr style="background-color: #00254D">
            <ul class="collection" style="border: unset;">
                <li class="collection-item">>> Alvin</li>
                <li class="collection-item">>> Alvin</li>
                <li class="collection-item">>> Alvin</li>
            </ul>
        </div>
    </div>
</div>
@endsection
