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
        <div class="mb-3 wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
            <p class="text-justify">
                During MUN delegates take on the roles of different countries (or occasionally specific figures) in committees that mimic the workings of the United Nations. To get a brief overview of each topic, simply <b>hover over the 'view more' button of the respective committee</b>. For the best experience, it's recommended to use a computer.
            </p>
        </div>
    
        <div class="row justify-content-center">
            @foreach ($committees as $item)
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card committee-card text-center">
                    <div class="card-image">
                        <img src="{{ asset('images/committees/' . $item['imagen']) }}" class="img-fluid" alt="{{ $item['committee'] }}">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{ $item['committee'] }}</h3>
                        <p class="card-text">{{ $item['theme'] }}</p>
                        <a href="#" class="btn-view-more" data-id="{{ $item['id'] }}">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="committeeModal" tabindex="-1" role="dialog" aria-labelledby="committeeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Body -->
                <div class="modal-body text-center">
                    <!-- Título del comité -->
                    <h3 id="committeeTitle" class="mb-4" style="color: #0a3b23;"></h3>
                    <!-- Imagen -->
                    <img id="committeeImage" src="" class="img-fluid mb-4" alt="Committee Image" style="border-radius: 20%; width: 100%; height: auto;">

<!-- Nombres con fondo verde -->
<div class="directors mb-3" style="display: flex; justify-content: center; gap: 10px;">
    <strong id="director_01" style="background-color: #117244; color: #fff; padding: 0.5rem 1rem; border-radius: 20px; font-size: 1rem;">Director 1</strong>
    <strong id="director_02" style="background-color: #117244; color: #fff; padding: 0.5rem 1rem; border-radius: 20px; font-size: 1rem;">Director 2</strong>
</div>
                    <!-- Tema -->
                    <p id="committeeTheme" class="theme mb-4"></p>
                    <!-- Botón -->
                    <a id="downloadGuide" href="#" class="btn btn-success">Download Study Guide</a>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection
@section('scripts')
    <script>
       $('body').on('click', '.btn-view-more', function(event) {
    event.preventDefault();
    let id = $(this).data('id');
    
    // Realiza la petición AJAX
    $.ajax({
        url: "{{ route('get_committee') }}",
        method: "POST",
        data: {
            '_token': "{{ csrf_token() }}",
            'id': id
        },
        success: function(response) {
            if (!response.status) {
                alert("Failed to load committee details!");
                return;
            }

            // Rellenar los datos del modal
            $('#committeeTitle').text(response.data.committee); // Título dentro del contenido del modal
            $('#committeeImage').attr('src', "{{ asset('images/committees/') }}/" + response.data.imagen);
            $('#director_01').text(response.data.director_01);
            $('#director_02').text(response.data.director_02);
            $('#committeeTheme').text(response.data.theme);
            $('#downloadGuide').attr('href', response.data.guide_url || '#');

            // Mostrar el modal
            $('#committeeModal').modal('show');
        },
        error: function() {
            alert("An error occurred while loading the committee details.");
        },
        dataType: "json"
    });
});




    </script>
@endsection