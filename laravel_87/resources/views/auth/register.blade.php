@extends('layouts.guest')
@section('title','Registrarse')
@section('content')

    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home" style="padding-bottom: 50px; padding-top: 50px">
        <div class="bg-overlay"></div>
        <div class="container" >
            <div class="d-flex justify-content-center align-items-center">
                <div class="card   bg-auth  " style="width: 30rem; padding-bottom: 25px; margin-top: 85px">
                    <div class="card-body bg-auth">
                        <h2 style="margin-top: 20px" class="text-center " data-aos="fade-up" data-aos-delay="200">
                            <img width="100px" class="img-fluid rounded-circle" src="{{url('app/img/newuser.png')}}" class="img-fluid" alt="">
                        </h2>
                        <h2 class="text-center  pb-2 px-4 py-4" data-aos="fade-up" data-aos-delay="200" >Registrarse</h2>
                        <form action="{{route('register')}}" class="contact-form webform" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input required type="text" name="names"   id="names" class="form-control"  placeholder="* Escriba sus Nombres Completos">
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="text" name="lastnames"   id="lastnames" class="form-control"  placeholder="* Escriba sus Apellidos Completos">
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="email" name="email"   id="email" class="form-control"  placeholder="* Escriba su Correo Electronico">
                            </div>
                            <div class="form-floating">
                                <input required type="password" name="password" class="form-control" id="password" placeholder="* Digite su Contraseña">
                            </div>
                            <div class="form-floating">
                                <input required type="password" name="password" class="form-control" id="password" placeholder="* Verifique su Contraseña">
                            </div>
                            <br>
                            <div class="row form-group d-flex justify-content-center ">
                                <button type="submit" class="btn custom-btn bordered " data-aos="fade-up" data-aos-delay="600">Registrarse</button>
                                <p class="text-center col-12" style="margin-top: 25px">Ya tienes una Cuenta  | <a class="link-primary" href="{{route('login')}}">Conectarse</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
