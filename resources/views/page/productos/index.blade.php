@extends('layouts.app')

@section('content')
    @area
    @slot('title','Productos')
    @endarea
<div class="container">
    <div class="row">
        <div class="col s12 m6">

                <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="responsive-img" alt="">
                <div class="mask flex-center rgba-black-strong">
                    <p class="white-text">strong overlay</p>
                </div>

        </div>
        <div class="col s12 m6">

                <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="responsive-img" alt="">
                <div class="mask flex-center rgba-black-strong">
                    <p class="white-text">strong overlay</p>
                </div>

        </div>
    </div>
</div>
@endsection
