@extends('layouts.principal')
    {{-- CSS del index --}}
    @section('cssParticular')
        <link rel="stylesheet" href="{{URL::asset('css/index.css')}}">

        {{-- Font titulo campeonatos y nombre de idolos --}}
        <link href='https://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{URL::asset('css/scroll/do-slide.min.css')}}">
    @endsection

	{{-- Titulo --}}
	@section('titulo')
		Inicio - EDLP
	@endsection

    {{-- Contenido principal --}}
    @section('contenido')
    	{{-- Menu superior --}}
    	@include('menuPrincipal/menu')

    	{{-- Formulario de registro --}}
    	@include('registrarse/formularioDeRegistro')

            @if(count($errors) > 0)
                @if ($errors->has('usuarioRegistro') || ($errors->has('claveRegistro')) || ($errors->has('emailRegistro')))
                       {{--  {{ $errors->first('usuarioRegistro') }} --}}
                    <script>
                        $(function() {
                            $('#registrarse').modal('show');
                        });
                    </script>
                @endif
            @endif

<div class="ds-parent">
            <div class="ds-container">

	<!-- Carrousel -->
        <!-- Full Page Image Background Carousel Header -->
            <div id="myCarousel" class="carousel">
                <div class="carousel-caption">
                    <img src="{{URL::asset('images/index/EscudoEstudiantesImagenCentral.png')}}" alt="EscudoEstudiantesImagenCentral" class="img-responsive center-block" id="imagenCentral" onClick="window.location.href='historias'">
                    <h1 onClick="window.location.href='historias'" id="textoEscudoCentral">Estudiantes de la Plata</h1>
                    <button id="botonCentral" onClick="window.location.href='historias'" class="btn btn-success btn-lg center-block">Historias</button>
                </div>
            
                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="fill img-responsive" style="background-image:url('images/index/url1.jpg');"></div>
                    </div>
                    <div class="item">
                        <div class="fill img-responsive" style="background-image:url('images/index/estudiantes-man-united.jpg');"></div>
                    </div>
                    <div class="item">
                        <div class="fill img-responsive" style="background-image:url('images/index/hinchada.jpg');"></div>
                    </div>
                    <div class="item">
                        <div class="fill img-responsive" style="background-image:url('images/index/copa.jpg');"></div>
                    </div>
                    <div class="item">
                        <div class="fill img-responsive" style="background-image:url('images/index/Estudiantes-campeón-del-mundo.jpg');"></div>
                    </div>
                    <div class="item">
                        <div class="fill img-responsive" style="background-image:url('images/index/boselli_desabato.jpg');"></div>
                    </div>
                    <div class="item">
                        <div class="fill img-responsive" style="background-image:url('images/index/pzamoreno.png');"></div>
                    </div>
                </div>
            </div>
       
        <!-- Idolos -->
            <div class="container-fluid" id="idolos">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-header text-center" id="encabezadoTitulos">
                                <h2>&Iacute;dolos picharratas</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="media">
                                <div class="media-left media-top">
                                    <a href="{{URL::asset('idolos')}}#bilardo">
                                        <img class="img-circle media-object" src="images/index/bilardojugador.jpg" alt="bilardo">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">C. Bilardo</h3>
                                    <h4>Era estudiantes</h4>
                                    <p><b>Jugador:</b> 1965 - 1970</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </p>
                                    <p><b>Director t&eacute;cnico:</b> 1971, 1975 - 1976, 1982, 2003 - 2004</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="media">
                                <div class="media-left media-top">
                                    <a href="{{URL::asset('idolos')}}#zubeldia">
                                        <img class="img-circle media-object" src="images/index/ozubeldia.jpeg" alt="zubeldia">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">O. Zubeld&iacute;a</h3>
                                    <h4>Era estudiantes</h4>
                                    <p><b>Director t&eacute;cnico:</b> 1965 - 1970</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6 col-md-4 col-md-pull-0">
                            <div class="media">
                                <div class="media-left media-top">
                                    <a href="{{URL::asset('idolos')}}#sabella">
                                        <img class="img-circle media-object" src="images/index/sabelladt.jpg" alt="sabella">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">A. Sabella</h3>
                                    <h4>Era estudiantes</h4>
                                    <p><b>Jugador:</b> 1982 - 1984, 1986 - 1987</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </p>
                                    <p><b>Director t&eacute;cnico:</b> 2009 - 2011</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="media">
                                <div class="media-left media-top">
                                    <a href="{{URL::asset('idolos')}}#pelegrina">
                                        <img class="img-circle media-object" src="images/index/pelegrina.jpg" alt="pelegrina">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">M. Pelegrina</h3>
                                    <h4>Era estudiantes</h4>
                                    <p><b>Jugador:</b> 1938 - 1952, 1954 - 1956</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="media">
                                <div class="media-left media-top">
                                    <a href="{{URL::asset('idolos')}}#jrveron">
                                        <img class="img-circle media-object" src="images/index/jrveron.jpg" alt="juanRamonVeron">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">J.R. Ver&oacute;n</h3>
                                    <h4>Era estudiantes</h4>
                                    <p><b>Jugador:</b> 1962 - 1972, 1975 - 1976, 1980 - 1981</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="media">
                                <div class="media-left media-top">
                                    <a href="{{URL::asset('idolos')}}#jsveron">
                                        <img class="img-circle media-object" src="images/index/jsveron.jpg" alt="juanSebastianVeron">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">J.S. Ver&oacute;n</h3>
                                    <h4>Era estudiantes</h4>
                                    <p><b>Jugador:</b> 1993 - 1995, 2006 - 2012, 2013 - 2014</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </p>
                                    <p><b>M&aacute;nager:</b> 2012 - 2013</p>
                                    <p><b>Presidente:</b> 2014 - Actualidad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Titulos -->
            <div class="container-fluid" id="titulos">
                <div class="container" id="copas">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-header text-center" id="encabezadoTitulos">
                                <h2>T&iacute;tulos oficiales</h2>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#amateur1913">
                                <img class="imgCopas" src="images/index/localSilueta.png" alt="amateur1913">
                                <div class="caption text-center">
                                    <h4>Primera Divisi&oacute;n (Amateur)</h4>
                                    <h4>1913</h4>
                                </div>
                            </a>
                        </div>
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#metropolitano1967">
                                <img class="imgCopas" src="images/index/localSilueta.png" alt="metropolitano1967">
                                <div class="caption text-center">
                                    <h4>Primera Divisi&oacute;n (Metropolitano)</h4>
                                    <h4>1967</h4>
                                </div>
                            </a>
                        </div>
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#libertadores1968">
                                <img class="imgCopas" src="images/index/libertadoresSilueta.png" alt="libertadores1968">
                                <div class="caption text-center">
                                    <h4>Copa Libertadores de Am&eacute;rica</h4>
                                    <h4>1968</h4>
                                </div>
                            </a>
                        </div>
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#intercontinental1968">
                                <img class="imgCopas" src="images/index/intercontinentalSilueta.png" alt="intercontinental1968">
                                <div class="caption text-center">
                                    <h4>Copa Intercontinental {{-- (UEFA - Conmebol) --}}</h4>
                                    <h4>1968</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#interamericana1969">
                                <img class="imgCopas" src="images/index/1972InteramericanaSilueta.png" alt="interamericana1969">
                                <div class="caption text-center">
                                    <h4>Copa Interamericana {{-- (Conmebol - Concacaf) --}}</h4>
                                    <h4>1969</h4>
                                </div>
                            </a>
                        </div>
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#libertadores1969">
                                <img class="imgCopas" src="images/index/libertadoresSilueta.png" alt="libertadores1969">
                                <div class="caption text-center">
                                    <h4>Copa Libertadores de Am&eacute;rica</h4>
                                    <h4>1969</h4>
                                </div>
                            </a>
                        </div>
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#libertadores1970">
                                <img class="imgCopas" src="images/index/libertadoresSilueta.png" alt="libertadores1970">
                                <div class="caption text-center">
                                    <h4>Copa Libertadores de Am&eacute;rica</h4>
                                    <h4>1970</h4>
                                </div>
                            </a>
                        </div>
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#metropolitano1982">
                                <img class="imgCopas" src="images/index/localSilueta.png" alt="metropolitano1982">
                                <div class="caption text-center">
                                    <h4>Primera Divisi&oacute;n (Metropolitano)</h4>
                                    <h4>1982</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#nacional1983">
                                <img class="imgCopas" src="images/index/localSilueta.png" alt="nacional1983">
                                <div class="caption text-center">
                                    <h4>Primera Divisi&oacute;n (Nacional)</h4>
                                    <h4>1983</h4>
                                </div>
                            </a>
                        </div>
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#apertura2006">
                                <img class="imgCopas" src="images/index/localSilueta.png" alt="apertura2006">
                                <div class="caption text-center">
                                    <h4>Primera Divisi&oacute;n (Apertura)</h4>
                                    <h4>2006</h4>
                                </div>
                            </a>
                        </div>
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#libertadores2009">
                                <img class="imgCopas" src="images/index/libertadoresSilueta.png" alt="libertadores2009">
                                <div class="caption text-center">
                                    <h4>Copa Libertadores de Am&eacute;rica</h4>
                                    <h4>2009</h4>
                                </div>
                            </a>
                        </div>
                        <div class="cadaCopa col-xs-12 col-sm-6 col-md-3">
                            <a class="thumbnail" href="{{URL::asset('titulos')}}#apertura2010">
                                <img class="imgCopas" src="images/index/localSilueta.png" alt="apertura2010">
                                <div class="caption text-center">
                                    <h4>Primera Divisi&oacute;n (Apertura)</h4>
                                    <h4>2010</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        @include('footer/footer')
        
        </div>
    </div>
    @endsection

    @section('scriptSlider')
        {{-- Script de scroll --}}
        <script src="{{URL::asset('js/scroll/do-slide.min.js')}}"></script>
        <script type="text/javascript">
            var slide = new DoSlide('.ds-container');
        </script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 10000, //changes the speed
                pause: 'disabled'
            })
        </script>
    @endsection