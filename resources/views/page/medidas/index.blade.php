@extends('layouts.app')

@section('content')

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <!-- Projects section v.4 -->
    <section class="container-fluid my-5">


        <div class="row"  style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2832%29.jpg); background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed">
            <div class="text-white text-center rgba-black-strong py-5 w-100">
                <div class="container">
                  <div class="row">
                      <div class="col-md-6">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut dolor dolore dolorem ducimus eius error harum itaque labore magni necessitatibus porro quod reprehenderit tempora, ullam? Esse nostrum ratione voluptates!
                          <br>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo iusto nam perferendis praesentium quod reprehenderit sequi veritatis. Dolore dolorum incidunt tempore? Ad maxime minima minus obcaecati omnis pariatur placeat quisquam.
                      </div>
                      <div class="col-md-6">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi at consectetur eos ex id in ipsum libero nihil, numquam perferendis placeat praesentium provident, quisquam rem repudiandae ullam vel veritatis!
                      </div>
                  </div>
                </div>
            </div>

        </div>

    </section>
    <!-- Projects section v.4 -->
@endsection
