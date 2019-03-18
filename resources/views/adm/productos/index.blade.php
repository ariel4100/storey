@extends('layouts.app')

@section('content')
    @area
    @slot('title','Productos')
    @endarea
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <div class="view">
                <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid" alt="">
                <div class="mask flex-center rgba-black-strong">
                    <p class="white-text">strong overlay</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="view">
                <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid" alt="">
                <div class="mask flex-center rgba-black-strong">
                    <p class="white-text">strong overlay</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
