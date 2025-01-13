@extends('layout')
@section('content')
<section class="committees-bg overflow-hidden home-section mb-0">
    <div id="particles-js">
    </div>
    <div class="waves-bg-img home-bg">
        {{-- <div class="circle-clip">
            <img src="images/slider-img/pattern-1.png" class="img-fluid" alt="">
        </div>
        <div class="square-clip">
            <img src="images/slider-img/pattern-2.png" class="img-fluid" alt="">
        </div> --}}
        <div class="container">
            <div class="owl-carousel owl-theme main-slider">
                <div class="item">
                    <div class="row align-items-center m-5">
                        <div class="col-12">
                            <div class="content-fadeInUp text-center mt-5">
                                <h2 class="heading">
                                    Committees
                                </h2>
                                <p class="text-white mb-0" style="font-size: 1.30rem; font-weight: 300">Download the</p>
                                <p class="para-txt mb-0 mt-2"></p>
                                <div class="learn-more">
                                    <a href="#aboutus" class="btn-home btn-success btn-rounded text-white"> &nbsp; Delegate Handbook &nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-features">
    <div class="container">
        <div class="mb-3 wow fadeInUp" data-wow-duration="1.5s"
            style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
            <p class="text-justify">
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type <b>specimen book</b>.
            </p>
        </div>

        <div class="row">
            <!-- Repite este bloque para cada tarjeta -->
            @foreach ($committees as $item)
            <div class="col-md-6 mb-4">
                <div class="card text-center">
                    <img src="{{ asset('images/committees/' . $item) }}" class="card-img-top" alt="Image Description">
                    <div class="card-body card-body-committess">
                        <a href="#" class="btn-home btn-success btn-rounded text-white btn-view-more"> &nbsp; View More &nbsp;</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Repite hasta completar las 10 tarjetas -->
        </div>

    </div>
</section>
@endsection