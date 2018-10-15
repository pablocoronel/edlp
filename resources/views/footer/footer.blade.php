<!-- Footer -->
        <div class="container-fluid" id="footer">
            <div class="container">
                <!-- Escudos -->
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-4">
                        <img src="{{URL::asset('images/escudoprimero.png')}}" alt="primerEscudo">
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <img src="{{URL::asset('images/escudoconestrellas.png')}}" alt="escudoEstrellas">
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <img src="{{URL::asset('images/EdeLPactual.png')}}" alt="escudoActual">
                    </div>
                </div>

                <!-- Informacion -->
                <div class="row text-center" id="informacion">
                    <div class="col-sx-6 col-sm-3">
                        <h4>Usuario</h4>
                        <ul>
                            <li><a href="{{URL::asset('/')}}">Inicio</a></li>
                            <li><a href="{{URL::asset('historias')}}">Historias</a></li>
                            <li><a href="{{URL::asset('/')}}">Ingresar</a></li>
                            
                            @if(\Auth::guest())
                                <li><a href="#registrarse" data-toggle="modal" data-target="#registrarse">Registrarse</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-sx-6 col-sm-3">
                        <h4>Equipos</h4>
                        <ul>
                            <li><a href="{{URL::asset('titulos')}}#amateur1913">Primera Divisi&oacute;n 1913</a></li>
                            <li><a href="{{URL::asset('titulos')}}#metropolitano1967">Primera Divisi&oacute;n 1967</a></li>
                            <li><a href="{{URL::asset('titulos')}}#libertadores1968">Libertadores 1968</a></li>
                            <li><a href="{{URL::asset('titulos')}}#intercontinental1968">Intercontinental 1968</a></li>
                            <li><a href="{{URL::asset('titulos')}}#interamericana1969">Interamericana 1969</a></li>
                            <li><a href="{{URL::asset('titulos')}}#libertadores1969">Libertadores 1969</a></li>
                            <li><a href="{{URL::asset('titulos')}}#libertadores1970">Libertadores 1970</a></li>
                            <li><a href="{{URL::asset('titulos')}}#metropolitano1982">Primera Divisi&oacute;n 1982</a></li>
                            <li><a href="{{URL::asset('titulos')}}#nacional1983">Primera Divisi&oacute;n 1983</a></li>
                            <li><a href="{{URL::asset('titulos')}}#apertura2006">Primera Divisi&oacute;n 2006</a></li>
                            <li><a href="{{URL::asset('titulos')}}#libertadores2009">Libertadores 2009</a></li>
                            <li><a href="{{URL::asset('titulos')}}#apertura2010">Primera Divisi&oacute;n 2010</a></li>
                        </ul>
                    </div>
                    <div class="col-sx-6 col-sm-3">
                        <h4>&Iacute;dolos</h4>
                        <ul>
                            <li><a href="{{URL::asset('idolos')}}#bilardo">C. Bilardo</a></li>
                            <li><a href="{{URL::asset('idolos')}}#zubeldia">O. Zubeld&iacute;a</a></li>
                            <li><a href="{{URL::asset('idolos')}}#sabella">A. Sabella</a></li>
                            <li><a href="{{URL::asset('idolos')}}#pelegrina">M. Pelegrina</a></li>
                            <li><a href="{{URL::asset('idolos')}}#jrveron">J.R. Ver&oacute;n</a></li>
                            <li><a href="{{URL::asset('idolos')}}#jsveron">J.S. Ver&oacute;n</a></li>
                        </ul>
                    </div>
                    <div class="col-sx-6 col-sm-3">
                        <h4>Compartir</h4>
                        <ul>
                            <li>
                                <a target="_blank" href="http://www.facebook.com/sharer.php?u=http://www.estudiantesdlp.webscenario.com.ar">
                                    <img src="{{URL::asset('images/facebook-logo.png')}}" alt="facebook">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://twitter.com/home?status=http://www.estudiantesdlp.webscenario.com.ar">
                                    <img src="{{URL::asset('images/twitter.png')}}" alt="twitter">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://plus.google.com/share?url=http://estudiantesdlp.webscenario.com.ar">
                                    <img src="{{URL::asset('images/google-g-logo.png')}}" alt="google+">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>