@extends('layout')
@section('content')
    <section class="section section-features mt-5">
        <div class="container mt-5">
            <div class="row align-items-center">
                <!-- Título centrado -->
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="font-weight-bold" style="border-bottom: 5px solid #0a3b23; display: inline;">Contact us</h2>
                    </div>
                </div>
            </div>
            <!-- Contenido principal -->
            <div class="row align-items-start d-flex align-items-stretch">
                <!-- Formulario -->
                <div class="col-lg-6 mb-3">
                    <!-- Barra superior -->
                    <div style="height: 5px; background-color: #10c024; margin-bottom: 20px;"></div>
                    <p class="text-justify">If you have any questions or need assistance regarding the conference, feel free to reach out to our administration team. We’re here to help with any doubts, suggestions, or comments you may have. <b>Contact us via email or our online form</b>, and we’ll respond promptly to ensure a smooth experience.</p>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your mobile phone">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Leave us a message"></textarea>
                        </div>
                        <!-- Botón centrado con padding -->
                        <div class="text-center">
                            <button type="submit" class="btn" style="background-color: #10c024; color: #fff; padding: 0px 60px;">Send</button>
                        </div>
                    </form>
                </div>
                <!-- Imagen -->
                <div class="col-lg-6">
                    <img src="{{ asset('images/map.png') }}" alt="Descripción de la imagen" style="width: 100%; object-fit: cover; border-radius: 5px; height: 100%;">
                </div>
            </div>
            
        </div>
    </section>
@endsection
