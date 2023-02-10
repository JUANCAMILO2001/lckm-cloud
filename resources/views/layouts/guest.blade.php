<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{url('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('app/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('app/css/aos.css')}}">
    <link rel="stylesheet" href="{{url('app/css/tooplate-gymso-style.css')}}">
    <title>@yield('title') - LCKM CLOUD</title>
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <a class="navbar-brand" href="{{route('index')}}"><i class="fa fa-cloud" style="margin-right: 10px"></i>LCKM CLOUD</a>

        <button style="margin-right: 50px" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a href="{{route('index')}}" class="nav-link smoothScroll">Inicio</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link smoothScroll">Portafolio</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link smoothScroll">Contacto</a>
                </li>
            </ul>

            <ul class="social-icon ml-lg-3">
                <li><a href="https://github.com/JUANCAMILO2001" class="fa fa-github" target="_blank
                "></a></li>
                <li><a href="https://twitter.com/JuanCam18570632" class="fa fa-twitter" target="_blank
                "></a></li>
                <li><a href="https://www.linkedin.com/in/juan-camilo-rodriguez-ramirez-83b7a0216" target="_blank
                " class="fa fa-linkedin"></a></li>
                <li><a href="https://www.instagram.com/camilo_stunt2001/" target="_blank
                "s class="fa fa-instagram"></a></li>
            </ul>
        </div>

    </div>
</nav>


    @yield('content')





<!-- FOOTER -->
<footer class="site-footer" style="padding-bottom: 25px">
    <div class="container">
        <div class="row">

            <div class="ml-auto col-lg-8 col-md-6 pt-3">
                <p class="copyright-text text-white">&copy;Copyright 2022 LCKM CLOUD.

                    Diseñador: <a href="https://www.tooplate.com">Juan Rodriguez</a></p>
            </div>

            <div class="d-flex justify-content-center mx-auto col-lg-4 col-md-6 col-12 pt-3">
                <p class="mr-4">
                    <i class="fa fa-envelope-o mr-1"></i>
                    <a href="#" >lckm-cloud@gmail.com</a>
                </p>

                <p class="text-white"><i class="fa fa-phone mr-1"></i> 666-999-777</p>
            </div>

        </div>
    </div>
</footer>

<!-- SCRIPTS -->
<script src="{{url('app/js/jquery.min.js')}}"></script>
<script src="{{url('app/js/bootstrap.min.js')}}"></script>
<script src="{{url('app/js/aos.js')}}"></script>
<script src="{{url('app/js/smoothscroll.js')}}"></script>
<script src="{{url('app/js/custom.js')}}"></script>

</body>
</html>
