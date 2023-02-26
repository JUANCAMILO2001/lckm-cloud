@extends('layouts.guest')
@section('title', 'INICIO')
@section('content')
    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

        <div class="bg-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">

                        <h6 data-aos="fade-up" data-aos-delay="300">Descarga, Crea y Comparte.</h6>

                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Nuevo espacio de almacenamiento en la Cloud de LCKM INNOVATY.</h1>

                        <a href="{{route('login')}}" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">INICIAR</a>

                        <a href="{{route('register')}}" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">REGISTRARSE</a>
                        <h6 class="m-5" data-aos="fade-up" data-aos-delay="300">INICIAR CON GOOGLE</h6>

                        <a href="{{url('/login-google')}}" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600"><img src="{{url('app/img/Google_icon-icons.com_60497.svg')}}"></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
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
