<!DOCTYPE html>
<html lang="en">
    <head>
        <title>360 BIZVUE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
        <link rel="icon" type="image/png" href="{{asset('assets/images/logo.png')}}">
    </head>
    <body>
        <script type="text/javascript">
        var utag_data = {
        };
        
        (function(a,b,c,d){
        a='/360bizvue/main/prod/utag.js';
        b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;
        a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
        })();
        </script>
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <p class="mb-0 phone pl-md-2"> <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> (866) 337-2644</a> <a href="#"><span class="fa fa-paper-plane mr-1"></span> clientsupport@360bizvue.com</a> </p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-md-end">
                        <div class="social-media">
                            <p class="mb-0 d-flex"> 
                                <a href="https://www.linkedin.com/company/360bizvue" class="d-flex align-items-center justify-content-center" target="_blank"><span class="fa fa-linkedin"><i class="sr-only">Linkedin</i></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}"><img class="mr-2" src="{{asset('assets/images/logo.png')}}" height="40" style="margin-top: -5px;">{{__('main.Sitename')}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"> <span class="oi oi-menu"></span> {{__('main.Menu')}} </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ \Request::is('/es') ? 'active' :'' }}"><a href="{{route('es_home')}}" class="nav-link">{{__('main.Home')}}</a></li>
                        <li class="nav-item {{ \Request::is('es/service/*') ? 'active' :'' }}"><a href="#" class="nav-link">Servicios</a>
                          <ul class="subnav">
                            <li class="subnav-item {{ \Request::is('es/service/digital') ? 'active' :'' }}"><a href="{{route('service.es_digital')}}" class="subnav-link">Inteligencia de Mercadeo Digital</a></li>
                            <li class="subnav-item {{ \Request::is('es/service/discount') ? 'active' :'' }}"><a href="{{route('service.es_discount')}}" class="subnav-link">Servicio de Pasar  terejta de credit y debito</a></li>
                          </ul>
                        </li>
                        <li class="nav-item {{ \Request::is('es/contact') ? 'active' :'' }}"><a href="{{route('es_contact')}}" class="nav-link">Contactenos</a></li>
                        <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Seleccione aquí para inglés</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="ftco-footer">
            <div class="container bg-pre">
                <div class="row mb-5">
                    <div class="col-sm-12 col-md-4">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2 logo"><a href="#">{{__('main.Sitename')}}</a></h2>
                            <p>Atraiga, deleite y retenga a sus clientes ideales.</p>
                            <ul class="ftco-footer-social list-unstyled mt-2">
                                <li class=""><a href="https://www.linkedin.com/company/360bizvue" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <div class="ftco-footer-widget mb-4 ml-md-4">
                            <h2 class="ftco-heading-2">Explorar</h2>
                            <ul class="list-unstyled">
                                <li><a href="{{route('es_contact')}}"><span class="fa fa-chevron-right mr-2"></span>Contactenos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">¿Tiene preguntas?</h2>
                            <ul class="list-unstyled">
                                <li><a href="#"><span class="icon fa fa-map marker pr-2"></span><span class="text">21218 St. Andrews Blvd Suite 735, Boca Raton, FL, 33433</span></a></li>
                                <li><a href="#"><span class="icon fa fa-phone pr-2"></span><span class="text">(866) 337-2644</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-2"></span><span class="text">clientsupport@360bizvue.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0 py-5 bg-black">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="mb-0" style="color: rgba(255,255,255,.5);">
                                Copyright &copy; 2021 Derechos de autor 360 BizVue Inc. | Todos los derechos reservados
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
            </svg>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/1bc56f82e9.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/main.min.js') }}"></script>
        @yield('script_digital')
        @yield('script_discount')
        @yield('script_total')
    </body>
</html>