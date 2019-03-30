@extends('layouts.app')

@section('content')
    <div class="carousel carousel-slider center">
        <div class="carousel-item red white-text" href="#one!">
            <h2>First Panel</h2>
            <p class="white-text">This is your first panel</p>
        </div>
        <div class="carousel-item amber white-text" href="#two!">
            <h2>Second Panel</h2>
            <p class="white-text">This is your second panel</p>
        </div>
        <div class="carousel-item green white-text" href="#three!">
            <h2>Third Panel</h2>
            <p class="white-text">This is your third panel</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
            <h2>Fourth Panel</h2>
            <p class="white-text">This is your fourth panel</p>
        </div>
    </div>
    @area
    @slot('title','Nuestra Empresa')
    @endarea
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque exercitationem expedita hic id iusto nihil omnis provident quisquam recusandae rem? Adipisci asperiores corporis distinctio impedit inventore minima necessitatibus, repellendus ut.</p>
        </div>
        <div class="col s12 m4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem esse facere labore perferendis quae! Ad architecto cupiditate, ducimus eligendi maiores nihil odit provident, quae repellat repellendus tempora, tempore totam unde!</p>
        </div>
    </div>
</div>
@endsection
