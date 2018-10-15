@extends('layouts/principal')
	@section('cssParticular')
		<link rel="stylesheet" href="{{URL::asset('css/titulos.css')}}">

		{{-- Font parrafos --}}
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		{{-- Font jumbotron --}}
		<link href='https://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
	@endsection

	@section('titulo')
		T&iacute;tulos - EDLP
	@endsection

	@section('contenido')
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

		{{-- Cuerpo --}}
		<div class="jumbotron">
			<div class="container">
				<h1>T&iacute;tulos Oficiles</h1>
				<p>Todos los campeonatos y copas oficiales obtenidas a lo largo de la historia.</p>
			</div>
		</div>
		<div class="container" id="contenedor">

			<div id="locales">
				<div class="page-heading">
					<h2><b>Campeonatos Locales</b> <small>1ª Divisi&oacute;n AFA</small></h2>
				</div>
				
				<div class="cadaTitulo" id="amateur1913">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Amateur 1913</h3>
					<img src="{{URL::asset('images/titulos/estudiantes1913.jpg')}}" alt="Estudiantes1913" class="img-responsive img-thumbnail center-block">

					<p>Primer campeonato amateur. El 23 de noviembre de 1913, Estudiantes logró su único título amateur de Primera División, convirtiéndose en el primer club platense en consagrarse campeón de la máxima categoría del fútbol argentino. El elenco albirrojo finalizó con cinco puntos de ventaja sobre su escolta, en una campaña que incluyó 14 triunfos y sólo una derrota. El gol del campeonato lo marcó Jorge Hirschi, a posteriori presidente del club.</p>
				</div>
				
				<div class="cadaTitulo" id="metropolitano1967">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Metropolitano 1967</h3>
					<img src="{{URL::asset('images/titulos/estudiantes1967.jpg')}}" alt="estudiantes1967" class="img-responsive img-thumbnail center-block">

					<p>En 1967, con el trabajo de Miguel Ignomiriello a cargo de las divisiones inferiores, el director técnico Osvaldo Zubeldía, el preparador físico Jorge Kistenmacher y el presidente del club, Mariano Mangano, se terminó de cohesionar un equipo que el 6 de agosto de ese año, en la final del torneo jugada en el Viejo Gasómetro, derrotó a Racing Club por 3-0 y conquistó el primer Campeonato Metropolitano de la historia, convirtiéndose en el primer club argentino en ganar un torneo oficial en la era profesional y quebrar la hegemonía de títulos que, hasta ese año y desde 1931, poseían los denominados cinco grandes del fútbol nacional: Boca Juniors, River Plate, San Lorenzo, Racing Club e Independiente. </p>
				</div>
				
				<div class="cadaTitulo" id="metropolitano1982">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Metropolitano 1982</h3>
					<img src="{{URL::asset('images/titulos/Estudiantes1982.jpg')}}" alt="Estudiantes1982" class="img-responsive img-thumbnail center-block">

					<p>El torneo Metropolitano de 1982, por esas cosas del fútbol argentino, terminó de jugarse el 14 de febrero de 1983. Ese día, hace 29 años, Estudiantes de La Plata se consagraba campeón con Carlos Salvador Bilardo como técnico, y con un mediocampo de lujo que todavía se recuerda.

					El Pincha vencía en el último partido por 2 a 0 a Talleres, en Córdoba, con goles de José Luis Brown y Hugo Gottardi. Con el triunfo mantuvo la diferencia sobre Independiente y dio la vuelta olímpica con un Bilardo levantando los brazos hacia el cielo y dedicándole el título a Osvaldo Zubeldía, su gran maestro, que había muerto días antes en Colombia.

					Aquel equipo de Estudiantes jugaba muy bien. Pero muy bien en serio. Ganó 21 partidos, empató 12 y solamente perdió 3. Sumó 54 puntos de los 72 en juego, convirtió 50 goles y le metieron 18.

					bilar.jpg

					Después de 15 años, el Pincha volvía a consagrarse campeón con un mediocampo compuesto por Miguel Angel Russo, que corría y raspaba por todos, y tres finos que la rompieron: Alejandro Sabella, Marcelo Trobbiani y el Bocha Ponce. 

					El goleador fue Guillermo Trama, con 13 tantos, seguido por Hugo Gottardi con 11 gritos. Juan Carlos Delménico, el arquero, jugó los 36 partidos.</p>
				</div>
				
				<div class="cadaTitulo" id="nacional1983">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Nacional 1983</h3>
					<img src="{{URL::asset('images/titulos/Estudiantes1983.jpg')}}" alt="Estudiantes1983" class="img-responsive img-thumbnail center-block">

					<p>El 10 de junio de 1983, Estudiantes fue coronado Campeón Nacional después de derrotar a Independiente de Avellaneda, en dos finales muy recordadas.
					El Pincha se llevó el primer triunfo de local por 2 a 0, con goles de Hugo Ernesto Gottardi -a los 35 minutos del primer tiempo- y de Guillermo Trama a los 36 minutos del segundo, sellando de esta manera el resultado parcial de la final por el Campeonato Nacional del ’83.
					El segundo partido -y definitivo- se disputó el día 10 de junio en una fría noche de Avellaneda, en la que Independiente se impuso frente a Estudiantes por 2 a 1. Pero la diferencia de gol, beneficiaba al Pincha, quien finalmente se proclamó Campeón Nacional.
					El marcador lo abrió el equipo local a los 15 minutos con gol de Ricardo Giusti, primera caída tras la cual Guillermo Trama, sobre el final del primer tiempo, estableció la igualdad, que sería transitoria ya que en el complemento, a los 25 minutos exactamente, Enzo Trossero ‘firmó’ el 2 a 1 final y con ello, paradójicamente, nuevamente la gloria ‘roja y blanca’.
					Durante ese torneo, el goleador del Pincha fue José Luis Brown con 7 tantos, a quien lo siguieron Gottardi con 6 conquistas y Guillermo Trama con 5.
					En tanto, Miguel Ángel Russo fue quien jugó más partidos durante el desarrollo del torneo, con su presencia en 18 encuentros. </p>
				</div>
				
				<div class="cadaTitulo" id="apertura2006">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Apertura 2006</h3>
					<img src="{{URL::asset('images/titulos/estudiantes2006.jpg')}}" alt="estudiantes2006" class="img-responsive img-thumbnail center-block">

					<p>Luego de caer eliminado por penales en los cuartos de final de la Libertadores ante Sao Paulo, el equipo dirigido por Diego Simeone se prometió a sí mismo salir campeón del torneo local. Con el retorno de Juan Sebastián Verón y el afianzamiento de jóvenes como Pavone, Angeleri y José Sosa, Estudiantes hilvanó una racha de 10 triunfos consecutivos (entre ellos el histórico 7-0 frente a Gimnasia) y forzó una inédita final frente a Boca, tras igualar en puntos. El Pincha ganó el Apertura 2006 luego de remontar el partido, con goles de José Sosa y Mariano Pavone. Volvió a gritar campeón tras 23 años.</p>
				</div>
				
				<div class="cadaTitulo" id="apertura2010">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Apertura 2010</h3>
					<img src="{{URL::asset('images/titulos/estudiantes2010.jpg')}}" alt="estudiantes2010" class="img-responsive img-thumbnail center-block">

					<p>El ciclo de Alejandro Sabella dio frutos por segunda vez. Tras un primer semestre brillante donde el equipo quedó a las puertas del Clausura y de la Libertadores, el equipo se repuso a la falta de delanteros y obtuvo el Apertura 2010. Sabella armó una base mezclando jugadores experimentados (Gastón Fernández fue el goleador y Agustín Orión tuvo la valla menos vencida) con jóvenes promesas como Federico Fernández, Marcos Rojo y Maxi Nuñez. Fue una espectacular campaña de 45 puntos y el título se dirimió en la última fecha: Estudiantes venció como local a Arsenal y bordó la undécima estrella.</p>
				</div>

				<div class="page-heading">
					<h2><b>Campeonatos Locales</b> <small>2ª Divisi&oacute;n AFA</small></h2>
				</div>
				
				<div class="cadaTitulo" id="primeraB1954">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Primera B 1954</h3>
					<img src="{{URL::asset('images/titulos/Estudiantes-1954.jpg')}}" alt="Estudiantes1954" class="img-responsive img-thumbnail center-block">

					<p>Estudiantes desciende a la Primera B (1953) y un extraordinario grupo de jugadores defendió el honor del club en la categoría del ascenso. A lo largo de 34 partidos, el equipo ganó 19, empató 8 y perdió 7 campaña que le posibilitó retornar de manera magistral a la máxima categoría del fútbol argentino.</p>
				</div>

				<div class="cadaTitulo" id="nacionalB1995">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Primera B Nacional 1995</h3>
					<img src="{{URL::asset('images/titulos/estudiantes1995.jpg')}}" alt="Estudiantes1995" class="img-responsive img-thumbnail center-block">

					<p>El equipo desciende por primera vez debido a resultados futbolísticos, pero retornó a Primera División tras sólo 265 días. Miguel Russo y Eduardo Manera supieron amalgamar las individualidades que tenían a mano con las incorporaciones traídas para jugar un fútbol de alto vuelo. Como consecuencia lógica de un trabajo serio y a conciencia, el equipo realiza una campaña histórica y ganó el Nacional B. Perdió sólo 4 partidos a lo largo de 42 fechas, y entre las principales figuras se encontraban Carlos Bossio, Edgardo Prátola, Ruben Capria, Juan Sebastián Verón y Jose Luis Calderón, entre otros.</p>
				</div>
			</div>

			<div id="internacionales">
				<div class="page-heading">
					<h2><b>Campeonatos Internacionales</b> <small>Conmebol y FIFA</small></h2>
				</div>
				
				<div class="cadaTitulo" id="libertadores1968">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Copa Libertadores de Am&eacute;rica 1968</h3>
					<img src="{{URL::asset('images/titulos/libertadores1968.png')}}" alt="libertadores1968" class="img-responsive img-thumbnail center-block">

					<p>El 16 de mayo de 1968 fue el día de la gran final de la Copa Libertadores de 1968. Este partido se disputó en el estadio Centenario de Montevideo, donde el Pincha ganó tres títulos internacionales, esta Copa fue la primera, y el puntapié inicial para una larga historia copera, llena de mística...
					Estudiantes venía de ganar el primer encuentro en La Plata por 2 a 1 al Palmeiras, y había perdido el segundo en San Pablo 3 a 1, por esto se debía disputar un tercer partido que definiría el ganador de la Copa.
					El primer gol fue a los 13 minutos del primer tiempo, Pachamé robó el balón en el mediocampo y lo cruzó hacia la derecha donde esperaba Ribaudo, el delantero hizo la pausa y clavó el derechazo que dejó sin chances al arquero brasilero Wildir. 
					Tomadas las marcas, jugando con precisión y mucha garra, Estudiantes defendía el resultado sabiendo que ya la tenía a mano. El Palmeiras fallaba en los últimos metros chocando siempre contra la sólida y efectiva defensa albirroja.
					A los 36 minutos del segundo tiempo, el Tato Medina rechazó la pelota, que tomó Verón en la mitad del campo para meter una corrida memorable, desparramo a uno, a otro, pasó al arquero y de derecha puso el 2 a 0 final.
					Final y festejo en Montevideo y La Plata. Esta sería la primera copa de un ciclo brillante que duraría varios años más.</p>
				</div>
				
				<div class="cadaTitulo" id="intercontinental1968">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Copa Intercontinental 1968</h3>
					<img src="{{URL::asset('images/titulos/intercontinental1968.jpg')}}" alt="intercontinental1968" class="img-responsive img-thumbnail center-block">

					<p>Estudiantes de la Plata , con un equipo que tuvo el sello táctico de su técnico Osvaldo Zubeldía, consiguió el 16 de octubre de 1968, la Copa Intercontinental luego de empatar 1-1 ante Manchester United de Inglaterra en el célebre estadio de Old Trafford.

					Estudiantes fue el primer equipo en ganar ese título de visitante, ya que el año anterior Racing Club había inaugurado la racha de títulos conseguidos por equipos argentinos, al vencer a Celtic Glasgow de Escocia por 1 a 0, en tercer partido en cancha neutral jugado en el estadio Centenario de Montevideo.

					El gol de la consagración fue convertido con un cabezazo por Juan Ramón Verón, padre de Juan Sebastián, el actual jugador pincha; mientras que para el equipo inglés empató Willie Morgan.</p>
				</div>
				
				<div class="cadaTitulo" id="interamericana1969">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Copa Interamericana 1969</h3>
					<img src="{{URL::asset('images/titulos/interamericana1969.jpg')}}" alt="interamericana1969" class="img-responsive img-thumbnail center-block">

					<p>La Copa Interamericana de 1969 fue la primera edición del torneo. El club campeón fue Estudiantes de la Plata que derrotó por 6 a 3 en el marcador global al equpo mexicano del Toluca, tras terminar en empate a 2 goles (ida y vuelta). Disputando un tercer encuentro en cancha neutral, donde el equipo pincharrata ganaría por un contundente 3 a 0.</p>
				</div>
				
				<div class="cadaTitulo" id="libertadores1969">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Copa Libertadores de Am&eacute;rica 1969</h3>
					<img src="{{URL::asset('images/titulos/libertadores1969.jpg')}}" alt="libertadores1969" class="img-responsive img-thumbnail center-block">

					<p>La noche del 21 de mayo de 1969 en el viejo estadio de 1 y 57 Estudiantes derrotaba a Nacional de Montevideo 2-0, con anotaciones de Marcos Conigliaro y Eduardo Flores y así el Pincha lograba consagrarse ganador de la Copa Libertadores de América 1969 .
					El partido de ida se desarrolló en el estadio Centenario de Montevideo, el 15 de mayo , y ese día el conjunto de Osvaldo Zubeldía derrotó al Tricolor de Uruguay 1-0 con un gol del Bocha Flores.

					El Pincha por haber ganado el trofeo en 1968 accedió, porque así lo determinaba el reglamento, a las semifinales de la Libertadores de 1969. En esta instancia dejó en el camino a Universidad Católica de Chile, a a quien venció en los dos juegos por idéntico marcador: 3-1. Luego llegó el turno de la final con Nacional.
					Así Estudiantes comenzaba a marcar una hegemonía dentro del continente y demostrar que la mística no era cuento, y que con trabajo y una manera de ver y analizar los juegos y los rivales los resultados se daban.</p>
				</div>
				
				<div class="cadaTitulo" id="libertadores1970">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Copa Libertadores de Am&eacute;rica 1970</h3>
					<img src="{{URL::asset('images/titulos/libertadores1970.jpg')}}" alt="libertadores1970" class="img-responsive img-thumbnail center-block">

					<p>El 27 de mayo de 1970 Estudiantes jugaba su tercera final consecutiva de la Copa Libertadores de América. Venía de ganar el primer encuentro por 1 a 0 ante Peñarol en La Plata.
					Este partido se disputó en el Centenario de Montevideo ante 60.000 personas que colmaron las tribunas.
					El partido fue durísimo como todo partido de Copa, pero el Estudiantes de Zubeldía se sentía cómodo en este tipo de encuentros. Con la ventaja que había conseguido de local, sabían que el empate les servía. Y así fue, el partido terminó 0 a 0, coronándose Campeón de la Copa Libertadores de América por tercera vez consecutiva.</p>
				</div>
				
				<div class="cadaTitulo" id="libertadores2009">
					<div class="separacionSuperior"></div>
					<h3><span class="glyphicon glyphicon-star"></span>Copa Libertadores de Am&eacute;rica 2009</h3>
					<img src="{{URL::asset('images/titulos/libertadores2009.jpg')}}" alt="libertadores2009" class="img-responsive img-thumbnail center-block">

					<p>Después de un par de años en donde el club mereció algún título más, llegó la tan ansiada Copa Libertadores de América. Alejandro Sabella formó un equipo compacto (récord de imbatibilidad de Ándujar) pero sin resignar la vocación ofensiva (Boselli fue goleador de la Copa). Estudiantes no perdió en fase de eliminación y no recibió goles jugando como local. En la definición frente al Cruzeiro en el Mineirao, sacó a relucir la histórica mística copera que caracteriza al club, dio vuelta el partido y se impuso con un global de 2-1. Juan Sebastián Verón levantó la 50ª Edición de la Copa Libertadores, que significó la cuarta en las vitrinas pincharratas.</p>
				</div>
			</div>
		</div>

		@include('footer/footer')
	@endsection