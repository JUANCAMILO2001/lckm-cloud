@extends('layouts.guest')
@section('title', 'Iniciar Sesion')
@section('content')
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay"></div>
        <div class="container" >
            <div class="d-flex justify-content-center align-items-center">
                <div class="card   bg-auth  " style="width: 30rem; padding-bottom: 25px; margin-top: 85px">
                    <div class="card-body bg-auth">
                        <h2 style="margin-top: 20px" class="text-center " data-aos="fade-up" data-aos-delay="200"><i  class="fa fa-user-circle " style="font-size: 150px"></i></h2>
                        <h2 class="text-center pt-2 pb-2 px-4 py-4" data-aos="fade-up" data-aos-delay="200" >Iniciar Sesion</h2>
                        <form action="{{route('login')}}" class="contact-form webform" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input required type="email" name="email"   id="email" class="form-control"  placeholder="Escriba su Correo">
                            </div>
                            <div class="form-floating">
                                <input required type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <br>
                            <div class="row form-group d-flex justify-content-center ">
                                <button type="submit" class="btn custom-btn bordered " data-aos="fade-up" data-aos-delay="600">Iniciar Sesión</button>
                                <a href="{{url('/login-google')}}" class="btn custom-btn bordereds " data-aos="fade-up" data-aos-delay="600">
                                    <span style="color: #22A1F3; font-size: 20px;  font-weight: bold;">G</span>
                                    <span style="color: #F32522; font-size: 20px;  font-weight: bold;">O</span>
                                    <span style="color: #F3B122; font-size: 20px;  font-weight: bold;">O</span>
                                    <span style="color: #22A1F3; font-size: 20px;  font-weight: bold;">G</span>
                                    <span style="color: #05B408; font-size: 20px;  font-weight: bold;">L</span>
                                    <span style="color: #F32522; font-size: 20px;  font-weight: bold;">E</span>
                                </a>
                                <p class="text-center" style="margin-top: 25px">¿Aun no te has Registrado?  | <a class="link-primary" href="{{route('register')}}">¡REGISTRATE AHORA!</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
