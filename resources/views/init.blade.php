@extends('layout')
@section('content')
    <!-- Home Start-->
    <section class="theme-bg overflow-hidden home-section">
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
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="img-fadeInRight text-center mt-4">
                                    <img src="images/slider-img/02-padua-mun.png" class="img-fluid mx-auto" alt="">
                                </div>
                                <div class="content-fadeInUp text-center">
                                    <p class="text-white mb-0" style="font-size: 1.30rem; font-weight: 300">Second Edition - April 26 and 27</p>
                                    <h2 class="heading">
                                        PADUA MODEL UNITED NATIONS
                                    </h2>
                                    <p class="para-txt"></p>
                                    <div class="learn-more">
                                        <a href="#aboutus" class="btn-home btn-success btn-rounded text-white"> &nbsp; Apply now! &nbsp;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="item">
                        <div class="col-12">
                            <div class="img-fadeInRight text-center mt-4">
                                <img src="images/slider-img/02-padua-mun.png" class="img-fluid mx-auto" alt="">
                            </div>
                            <div class="content-fadeInUp text-center">
                                <p class="text-white mb-0" style="font-size: 1.30rem; font-weight: 300">Second Edition - April 26 and 27</p>
                                <h2 class="heading">
                                    PADUA MODEL UNITED NATIONS
                                </h2>
                                <p class="para-txt"></p>
                                <div class="learn-more">
                                    <a href="#aboutus" class="btn-home btn-success btn-rounded text-white"> &nbsp; Apply now! &nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home End -->
    <section class="section" id="secretary-general">
        <div class="container">
            <div class="row align-items-center">
                <!-- Imagen al lado izquierdo -->
                <div class="col-md-6">
                    <div class="wow fadeIn" data-wow-duration="1500ms">
                        <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='300' style='background:gray'><rect width='400' height='300' fill='gray'/></svg>" class="img-fluid" alt="Secretary General">
                    </div>
                </div>
                <!-- Contenido al lado derecho -->
                <div class="col-md-6">
                    <div class="content wow fadeInUp" data-wow-duration="1500ms">
                        <h4 class="subtitle font-weight-bold">Letter from</h4>
                        <h2 class="title font-weight-bold">Secretary General</h2>
                        <p class="mt-3 text-justify">
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                        </p>
                        <div style="border-left: 5px solid #0a3b23; padding-left: 20px;">
                            <p class="mt-4 font-italic font-weight-bold mb-0">Ilenka Ruiz</p>
                            <p class="small font-weight-normal">Padua Model United Nations Secretary-General</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nueva sección (Directors) dentro de #secretary-general -->
        </div>
    </section>
    
    <section class="section_directors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="font-weight-bold" style="border-bottom: 5px solid #0a3b23; display: inline;">Padua MUN 2025 Directors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme showcase-slider wow fadeIn" data-wow-duration="1000ms">
                        <!-- Primera tarjeta -->
                        <div class="item">
                            <div class="showcase-card text-center border rounded shadow-sm p-3">
                                <!-- Imagen -->
                                <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='150' style='background:gray'><rect width='200' height='150' fill='gray'/></svg>" 
                                    alt="Placeholder" 
                                    class="img-fluid rounded mb-3">
                                <!-- Nombre -->
                                <h4 class="fw-bold mb-1">Lorenzo Saldivar</h4>
                                <!-- Cargo -->
                                <p class="text-muted small mb-0">CRISIS Director</p>
                            </div>
                        </div>
            
                        <!-- Segunda tarjeta -->
                        <div class="item">
                            <div class="showcase-card text-center border rounded shadow-sm p-3">
                                <!-- Imagen -->
                                <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='150' style='background:gray'><rect width='200' height='150' fill='gray'/></svg>" 
                                    alt="Placeholder" 
                                    class="img-fluid rounded mb-3">
                                <!-- Nombre -->
                                <h4 class="fw-bold mb-1">Valentina Baldini</h4>
                                <!-- Cargo -->
                                <p class="text-muted small mb-0">ILO Director</p>
                            </div>
                        </div>
            
                        <!-- Agregar más tarjetas -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- Contenido al lado derecho -->
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="font-weight-bold" style="border-bottom: 5px solid #0a3b23; display: inline;">Padua MUN Team</h2>
                    </div>
                </div>
            </div>
    
            <!-- Nueva sección con imágenes del equipo -->
            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='150' style='background:gray'><rect width='200' height='150' fill='gray'/></svg>" class="img-fluid rounded mb-3" alt="Milagros Quispe">
                    <p class="font-weight-bold mb-0">Milagros Quispe</p>
                    <p class="small">Faculty Advisor</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='150' style='background:gray'><rect width='200' height='150' fill='gray'/></svg>" class="img-fluid rounded mb-3" alt="Jose Vera-Tudela">
                    <p class="font-weight-bold mb-0">Jose Vera-Tudela</p>
                    <p class="small">Coach</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='150' style='background:gray'><rect width='200' height='150' fill='gray'/></svg>" class="img-fluid rounded mb-3" alt="Edith Quiñe">
                    <p class="font-weight-bold mb-0">Edith Quiñe</p>
                    <p class="small">Faculty Advisor</p>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12 text-center">
                    <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='1200' height='400' style='background:gray'><rect width='1200' height='400' fill='gray'/></svg>" class="img-fluid-images w-100 rounded mb-3" alt="Edith Quiñe">
                </div>
            </div>
        </div>
    </section>

    <section class="section_directors bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="font-weight-bold" style="border-bottom: 5px solid #0a3b23; display: inline;">Padua MUN 2025 Secretariat</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme showcase-slider wow fadeIn" data-wow-duration="1000ms">
                        <!-- Primera tarjeta -->
                        <div class="item">
                            <div class="showcase-card text-center border rounded shadow-sm p-3">
                                <!-- Imagen -->
                                <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='150' style='background:gray'><rect width='200' height='150' fill='gray'/></svg>" 
                                    alt="Placeholder" 
                                    class="img-fluid rounded mb-3">
                                <!-- Nombre -->
                                <h4 class="fw-bold mb-1">Mikelly Rodriguez</h4>
                                <!-- Cargo -->
                                <p class="text-muted small mb-0">Under Secretary-General</p>
                            </div>
                        </div>
            
                        <!-- Segunda tarjeta -->
                        <div class="item">
                            <div class="showcase-card text-center border rounded shadow-sm p-3">
                                <!-- Imagen -->
                                <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='150' style='background:gray'><rect width='200' height='150' fill='gray'/></svg>" 
                                    alt="Placeholder" 
                                    class="img-fluid rounded mb-3">
                                <!-- Nombre -->
                                <h4 class="fw-bold mb-1">Paris Alban</h4>
                                <!-- Cargo -->
                                <p class="text-muted small mb-0">Head of Materials</p>
                            </div>
                        </div>
            
                        <!-- Agregar más tarjetas -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-features">
        <div class="container">
            <div class="row align-items-center">
                <!-- Contenido al lado derecho -->
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="font-weight-bold" style="border-bottom: 5px solid #0a3b23; display: inline;">Partners</h2>
                    </div>
                </div>
            </div>

            <div class="features-main-block">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="mt-30 features-square wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                            <div class="text-center">
                                <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='150' style='background:gray'><rect width='200' height='150' fill='gray'/></svg>" class="img-fluid" alt="Brand 1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="mt-30 features-square wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                            <div class="text-center">
                                <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='150' style='background:gray'><rect width='200' height='150' fill='gray'/></svg>" class="img-fluid" alt="Brand 2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection