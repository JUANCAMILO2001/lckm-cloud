@extends('layouts.guest')
@section('title', 'CONTACTO')
@section('content')
    <!-- CONTACT -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Si tienes al guna duda Contactanos:</h2>

                    <form action="#"  class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="Nombre">

                        <input type="email" class="form-control" name="cf-email" placeholder="Correo">

                        <textarea class="form-control" rows="5" name="cf-message" placeholder="Mensaje"></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Enviar Mensaje</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Dónde puedes <span>encontrarnos</span></h2>

                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> Parque de los Hippies, Bogotá D.C, Colombia.</p>
                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe style="filter: invert(90%)" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=parque%20de%20los%20hippies+()&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
