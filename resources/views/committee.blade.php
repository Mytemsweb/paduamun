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
                    <img src="{{ asset('images/committees/' . $item["imagen"]) }}" class="card-img-top" alt="Image Description">
                    <div class="card-body card-body-committess">
                        <a href="#" class="btn-home btn-success btn-rounded text-white btn-view-more" data-id="{{ $item["id"] }}"> &nbsp; View More &nbsp;</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Repite hasta completar las 10 tarjetas -->
        </div>

        <!-- Modal -->
        

    </div>

    <div class="modal fade" id="committeeModal" tabindex="-1" role="dialog" aria-labelledby="committeeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg border-0">
                <!-- Modal Header -->
                <div class="modal-header text-white" style="background-color: #1b5e20;">
                    <h5 class="modal-title font-weight-bold" id="committeeModalLabel">Committee Details</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body text-center p-4">
                    <!-- Imagen del Comité -->
                    <img id="committeeImage" src="" class="img-fluid mb-3 rounded shadow-sm" alt="Committee Image">
                    <!-- Título del Comité -->
                    <h4 id="committeeTitle" class="text-center mb-3 font-weight-bold text-success"></h4>
                    <!-- Tema del Comité -->
                    <p id="committeeTheme" class="text-center text-secondary mb-3"></p>
                    <!-- Detalles -->
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <p class="mb-2"><strong>Director:</strong> <span id="committeeDirector" class="text-dark"></span></p>
                        </div>
                        <div class="col-md-5">
                            <p class="mb-2"><strong>Type:</strong> <span id="committeeType" class="text-dark"></span></p>
                        </div>
                    </div>
                    <!-- Botón de descarga -->
                    <div class="text-center mt-4">
                        <a id="downloadGuide" href="#" class="btn btn-success px-4 py-2 shadow">Download Study Guide</a>
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer bg-light border-0">
                    <button type="button" class="btn btn-secondary px-4 py-2 shadow" data-dismiss="modal">Close</button>
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
        url: "{{ route('get_committee') }}", // Asegúrate de que esta ruta esté configurada en web.php
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
            $('#committeeImage').attr('src', "{{ asset('images/committees/') }}/" + response.data.imagen);
            $('#committeeTitle').text(response.data.committee);
            $('#committeeTheme').text(response.data.theme);
            $('#committeeDirector').text(response.data.director);
            $('#committeeType').text(response.data.type);
            $('#downloadGuide').attr('href', response.data.guide_url); // Si tienes una URL de guía

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