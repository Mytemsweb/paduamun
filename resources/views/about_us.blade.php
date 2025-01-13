@extends('layout')
@section('content')
    <section class="section section-features mt-5">
        <div class="container mt-5">
            <div class="row align-items-center">
                <!-- Contenido al lado derecho -->
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="font-weight-bold" style="border-bottom: 5px solid #0a3b23; display: inline;">About our
                            Delegation</h2>
                    </div>
                </div>
            </div>

            <div class="mb-3 wow fadeInUp" data-wow-duration="1.5s"
                style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                <p class="text-justify">
                    It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                    of letters, as opposed to using 'Content here, content here', making it look like readable English
                </p>
                <p class="text-justify">
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                    and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                    evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                <p class="text-justify">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                    Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a
                    Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source. Lorem Ipsum comes from sections
                </p>

                <div class="container mt-4">
                    <!-- Imagen principal -->
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='1200' height='400' style='background:gray'><rect width='1200' height='400' fill='gray'/></svg>"
                                class="img-fluid-images w-100 rounded mb-3" alt="Header Image">
                        </div>
                    </div>

                    <hr class="hr-border">
                
                    <!-- Botones de categorías y las imágenes debajo -->
                    <div class="row text-center">
                        <div class="col-md-4 col-12 mb-2">
                            <button class="btn btn-success w-100 rounded-pill btn-view-more">Leadership</button>
                            <div class="card mt-2">
                                <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='300' style='background:gray'><rect width='400' height='300' fill='gray'/></svg>"
                                    class="img-fluid-images w-100 rounded" alt="Card Image">
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-2">
                            <button class="btn btn-success w-100 rounded-pill btn-view-more">Engagement</button>
                            <div class="card mt-2">
                                <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='300' style='background:gray'><rect width='400' height='300' fill='gray'/></svg>"
                                    class="img-fluid-images w-100 rounded" alt="Card Image">
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-2">
                            <button class="btn btn-success w-100 rounded-pill btn-view-more">Inclusion</button>
                            <div class="card mt-2">
                                <img src="data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='300' style='background:gray'><rect width='400' height='300' fill='gray'/></svg>"
                                    class="img-fluid-images w-100 rounded" alt="Card Image">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
@endsection
