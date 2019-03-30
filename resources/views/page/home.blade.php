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
    <div class="container">
        <h4 class="center">PRODUCTOS DESTACADOS</h4>
        <hr class="center" style="width: 10%;">
        <div class="row center">
                <div class="col s12 m4">
                    <div class="card  darken-1" style="border: 1px solid darkgrey; box-shadow: unset">
                        <div class="card-content white-text">
                        </div>
                    </div>
                    <p>TITLE</p>
                </div>
            </div>

    </div>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, {
                indicators: true,
                fullWidth: true
            });
            autoplay()
            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 2000);
            }

        });
    </script>
@endpush
