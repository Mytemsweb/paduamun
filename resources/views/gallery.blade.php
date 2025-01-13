@extends('layout')
@section('content')
<section class="section portfolio-section grid-col-4 active mt-5">
    <div class="container mt-5"> 
        <div class="filters text-center wow fadeInUp mt-5" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
            <ul class="p-0 list-unstyled d-flex align-items-center justify-content-center">
                <li class="py-3 mx-3 active" data-filter="*">All</li>
                <li class="py-3 mx-3" data-filter=".first-edition">1st Edition</li>
                <li class="py-3 mx-3" data-filter=".munners">Munners</li>
                <li class="py-3 mx-3" data-filter=".last-year">Last Year</li>
            </ul>
        </div>

        <div class="filters-content wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
            <div class="row grid" style="position: relative;">
                <!-- 1st Edition -->
                @foreach($first_edition as $image)
                    <div class="col-md-3 col-12 all first-edition" style="position: absolute;">
                        <div class="item shadow text-center btn-gallery">
                            <img src="images/gallery/first_edition/{{ $image }}" alt="{{ $image }}" class="img-fluid-gallery">
                            <div class="magnific-icon">
                                <a href="images/gallery/first_edition/{{ $image }}" class="js-zoom-gallery">
                                    <i class="mdi mdi-magnify-plus-outline text-white"></i>
                                </a>
                            </div>				
                        </div>
                    </div>
                @endforeach

                <!-- Munners -->
                @foreach($munners as $image)
                    <div class="col-md-3 col-12 all munners" style="position: absolute;">
                        <div class="item shadow text-center btn-gallery">
                            <img src="images/gallery/munners/{{ $image }}" alt="{{ $image }}" class="img-fluid-gallery">
                            <div class="magnific-icon">
                                <a href="images/gallery/munners/{{ $image }}" class="js-zoom-gallery">
                                    <i class="mdi mdi-magnify-plus-outline text-white"></i>
                                </a>
                            </div>				
                        </div>
                    </div>
                @endforeach

                <!-- Last Year -->
                @foreach($last_year as $image)
                    <div class="col-md-3 col-12 all last-year" style="position: absolute;">
                        <div class="item shadow text-center btn-gallery">
                            <img src="images/gallery/last_year/{{ $image }}" alt="{{ $image }}" class="img-fluid-gallery">
                            <div class="magnific-icon">
                                <a href="images/gallery/last_year/{{ $image }}" class="js-zoom-gallery">
                                    <i class="mdi mdi-magnify-plus-outline text-white"></i>
                                </a>
                            </div>				
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
    <script>
        
    </script>
@endsection