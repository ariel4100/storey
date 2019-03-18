@extends('adm.layouts.app')

@section('content')
    @area
    @slot('title','Blog')
    @endarea
<div class="container my-5">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <h6>RIT Registrador de Parámetros Eléctricos </h6>
                    <p>
                        Optimice el consumo de Energía de su empresa. Reduzca el costo de sus facturas eléctricas y evite gastos adicionales
                    </p>
                    <a href="">Leer mas >></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <form action="">
                <div class="input-group md-form form-sm">
                    <input class="form-control lime-border" type="text" placeholder="Buscar..." aria-label="Search">
                    <div class="input-group-append">
                        <span class="input-group-text white" id="basic-text1">
                            <i class="fas fa-search" style="color: #008780;" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </form>
            <h5 style="color: #00254D;">CATEGORIAS</h5>
            <hr style="color: #00254D;">
            <ul class="list-unstyled">
                <li>>> Actualidad</li>
                <li>>> Empresa</li>
            </ul>
        </div>
    </div>
</div>
@endsection
