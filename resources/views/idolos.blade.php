@extends('layouts/principal')
	@section('cssParticular')
		<link rel="stylesheet" href="{{URL::asset('css/idolos.css')}}">
		
		{{-- Font parrafos --}}
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		{{-- Font jumbotron --}}
		<link href='https://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
	@endsection

	@section('titulo')
		&Iacute;dolos - EDLP
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
				<h1>&Iacute;dolos del club</h1>
				<p>Los m&aacute;ximos &iacute;dolos que se destacaron en la instituci&oacute;n pincharrata.</p>
			</div>
		</div>

		<div class="container">
			{{-- <div class="page-heading text-left">
				<h1><b>&Iacute;dolos del club</b> <small>Jugadores y t&eacute;cnicos</small></h1>
			</div> --}}

			<section id="idolos">
				<article id="bilardo" class="jugador clearfix">
					<div class="separacionSuperior"></div>
					<h2>Carlos Bilardo</h2>
					<div class="pull-left">
						<img src="{{URL::asset('images/idolos/Bilardo.jpg')}}" alt="Bilardo" class="img-responsive img-thumbnail">
					</div>
					<p class="text-justify">Carlos Salvador Bilardo nació el 16 de Marzo de 1939 en La Paternal, Buenos Aires, Argentina.
					Comenzó su carrera como futbolista jugando en las divisiones inferiores de San Lorenzo de Almagro, hasta que en 58' tuvo la oportunidad de jugar en el primer equipo.
				
					Luego fue fichado por el Club Deportivo Español, club en donde se desempeño durante las temporadas de 1961 a 1965.</p>
				
					<p>En 1965 fue traspasado a Estudiantes de la Plata, club con el cual ganó 1 liga en 1967, 3 Copas Libertadores de América (1968, 1969 y 1970), la Copa Interamericana de 1969 y la Copa Intercontinental 1968.
					Carlos se retiró como futbolista al finalizar la temporada 1969 en Estudiantes de la Plata.</p>
				
					<p>Como director técnico en Estudiantes en 1971, logró lo que parecía un descenso seguro de dicho equipo, pero más tarde volvió a ocupar esa función en 1973 y 1975, y esta vez logró el Subcampeonato (invicto) detrás de River Plate.</p>
				
					<p>Luego se radicó en Colombia, donde dirigió al Deportivo de Cali entre 1976 y 1979, donde obtuvo 2 ligas y llevo por primera vez a un equipo Colombiano a la final de la Copa Libertadores.
					Durante 1980 y 1981 dirigió a la Selección de fútbol colombiana de cara a la Copa Mundial de Fútbol de España 1982.</p>
				
					<p>En el 82' se hizo director técnico nuevamente de Estudiantes de la Plata, club con el cual consiguió ganar el Metropolitano de ese año.
					Gracias a la excelente campaña realizada con Estudiantes, Bilardo se convierte en el entrenador del equipo nacional argentino y se proclama campeón de la Copa Mundial de Fútbol de México 1986. Al siguiente mundial logró conseguir el Subcampeonato de la Copa Mundial en Italia 1990.</p>
				
					<p>A mediados de la temporada 1992-1993, fichó para el Sevilla FC, aunque sólo permanecería una temporada.
					En 1996, comenzó a entrenar a Boca Juniors, donde realizó varios cambios en el equipo.
					A la temporada siguiente es llamado por el Sevilla nuevamente, ya que este se encontraba a punto de descender, y Carlos Bilardo fue hacia España y evitó la caída del equipo, aunque sólo permaneció 2 meses.</p>
				
					<p>Durante 1999 y el 2000 se hizo cargo de la selección de Libia, y a los 3 años vuelve a Estudiantes, equipo que también necesitaba ayuda para no descender. 
					Allí se quedo hasta el 2004, ya que debió retirarse por problemas personales que no aclaró.</p>
				</article>
				
				<article id="zubeldia" class="jugador">
					<div class="separacionSuperior"></div>
					<h2>Osvaldo Zubeld&iacute;a</h2>
					<div class="pull-left">
						<img src="{{URL::asset('images/idolos/zubeldia.jpg')}}" alt="Zubeldia" class="img-responsive img-thumbnail">
					</div>
				
					<p>Osvaldo Juan Zubeldía Chidichino nació en Junín, Argentina, el 24 de junio de 1927, en el seno de una familia de origen vasco e italiana. ‘El Flaco’, como le llamaban de niño, era un apasionado del fútbol. Sus padres le regalaron unas botas con las que dormía. Zubeldía cumplió su sueño y en 1949 debutó con el plantel profesional de Vélez Sarsfield como volante izquierdo. Con el club de Liniers jugó hasta 1955. Al año siguiente firmó por Boca Juniors, donde estuvo una temporada. Luego jugó una temporada más en Atlanta, donde se convirtió en jugador-entrenador. En 1960 se retiró en Banfield, sin cumplir su sueño infantil, jugar en River Plate.</p>
				
					<p>En 1961 debutó como entrenador ya en exclusiva en el Atlanta.En las dos temporadas en las que entrenó a este modesto club fue donde puso en práctica las principales ideas que salieron de su cabeza y aún hoy se practican por equipos de todo el mundo: el entrenamiento en turno doble (mañana y tarde), el cuidado por la estrategia a balón parado (por ejemplo, los saques de esquina al primer palo y prolongados de cabeza hacia el segundo), la creación de un centrocampista de contención o ‘stopper’ o la trampa del fuera de juego para los ataques rivales.</p>
				
					<p>1965 es un año especial para Zubeldía: ocupa brevemente el cargo de seleccionador nacional, publica un libro titulado Táctica y estrategia del fútbol y ficha por Estudiantes de La Plata para evitar el descenso del equipo. No sólo lo consiguió (acabó sexto), sino que convirtió al ‘pincharrata’ en uno de los mejores equipos de América.</p>
				
					<p>En 1967 ganaron el campeonato metropolitano y fueron subcampeones del nacional, lo que les permitió jugar la Copa Libertadores de América de 1968. Llegaron a la final de esta competición, derrotando al Palmeiras brasileño. Posteriormente ganarían la Intercontinental, al vencer al Manchester United de Bobby Charlton. Pero eso no fue todo, ya que repitió triunfo en 1969 ante Nacional de Montevideo y en 1970 ante el también uruguayo club Peñarol (éxitos que no pudo culminar con las Intercontinentales siguientes, ante Ac Milan y Feyenoord).</p>
				
					<p>Tras esta etapa triunfal, pasó por Vélez, San Lorenzo y Racing, en temporadas mucho más discretas que las de Estudiantes, a excepción de un campeonato nacional (1974), con ‘los cuervos’.</p>
				
					<p>En 1976, un contrato millonario lo lleva a Colombia, al Atlético Nacional de Medellín. Consiguió el título de Liga en su primer año y en el último. Meses después de lograr este último hito, cuando se disponía a sellar un boleto de apuestas hípicas en Medellín, le sobrevino un ataque al corazón que acabó con su vida. Era el 17 de enero de 1982. Osvaldo Zubeldía tenía 54 años y se iba así uno de los últimos inventores del fútbol. Poco después, uno de sus discípulos en el Estudiantes tricampeón de América, Carlos Salvador Bilardo, aplicaba sus conocimientos adquiridos con Zubeldía para dirigir a Argentina al campeonato del mundo de 1986. Pero eso es otra historia.</p>
				</article>
				
				<article id="sabella" class="jugador">
					<div class="separacionSuperior"></div>
					<h2>Alejandro Sabella</h2>
					<div class="pull-left">
						<img src="{{URL::asset('images/idolos/sabella.jpg')}}" alt="Sabella" class="img-responsive img-thumbnail">
					</div>
				
					<p>Alejandro Esteban Sabella es oriundo de Buenos Aires, donde nació el 5 de noviembre del año 1954. Sus primeros pasos en el mundo del fútbol los daría en uno de los equipos más importantes del país, como es River Plate.</p>
				
					<p>En el equipo millonario, cito en el barrio porteño de Nuñez, realizaría las inferiores y también su debut en la primera categoría en 1974, sin embargo y a pesar de tener unas condiciones técnicas excelentes, a Sabella le tocaría competir en aquel tiempo con uno de los mejores jugadores riverplatenses, el Beto Alonso, quien sin dudas era un difícil adversario que ya se había ganado a la hinchada y la camiseta diez. Permanecería varias temporadas en River pero siempre tras la sombra de Alonso algo que obviamente afectaría su desarrollo profesional en el club.</p>
				
					<p>En 1978, Sabella, es transferido al fútbol inglés, a un club de tercera categoría, Sheffield United Football Club. Su buena performance haría que al tiempo se lo transfiriese al Leeds United, aunque, en este equipo no se repetiría el éxito y en 1981 ya estaba de nuevo en Argentina buscando club.</p>
				
					El club platense Estudiantes de La Plata posa su interés en él y de la mano del director técnico Carlos Salvador Bilardo, el equipo y Sabella saldrán campeones dejando una huella imborrable en la historia del club.
				
					<p>En la selección nacional de fútbol tendría un breve paso dado que allí la competencia por un lugar fue aún más dura que en River al tener que disputar posición con Alonso, Bochini y el mismísimo Diego Maradona.</p>
				
					<p>Entre 1985 y 1986 se desempeña en el fútbol brasilero, en el Gremio de Porto Alegre. Luego de esta experiencia vuelve a Estudiantes y al tiempo se suma al fútbol mexicano, en el Irapuato. Termina su carrera como futbolista en el club Ferrocarril Oeste.</p>
				
					<p>Pero no se alejaría del fútbol tras el retiro y de inmediato volvió a vincularse a él como director técnico. Durante los primeros años como entrenador haría una dupla con Daniel Passarella en diversos equipos como ser: River, Parma, Monterey y Corinthians, y en las selecciones argentina y uruguaya.</p>
				
					<p>En 2009 asume en solitario la dirección técnica de Estudiantes de La Plata. Tras un exitoso paso por el club como entrenador, en 2011, es contratado por la Asociación del Fútbol Argentino para dirigir a la selección nacional.</p>
				</article>
				
				<article id="pelegrina" class="jugador">
					<div class="separacionSuperior"></div>
					<h2>Manuel Pelegrina</h2>
					<div class="pull-left">
						<img src="{{URL::asset('images/idolos/Manuelpelegrina.jpg')}}" alt="ManuelPelegrina" class="img-responsive img-thumbnail">
					</div>
				
					<p>Manuel Gregorio Pelegrina nació el 19 de noviembre de 1919 en San Vicente, Córdoba. 
					A lo largo de la historia del fútbol argentino, Manuel Pelegrina es uno de los jugadores que con mayor violencia le pegaba a la pelota y por tal motivo varios arqueros rivales lo terminaron sufriendo en carne propia.</p>
				
					<p>Claro que lo de Payo no era solamente producto de remate potente, sino que además tenía dirección y puntería. No por algo es el cuarto goleador del profesionalismo (detrás de Arsenio Erico, Angel Labruna y Herminio Masantonio) y el máximo artilero de Estudiantes.
				
					En el primer año que vistió la camiseta marcó 17 tantos sobre 31 partidos jugados en Primera División. A pesar de ser el máximo artillero del club, nunca pudo ser el goleador de un torneo. Una curiosidad.</p>
				
					<p>El Payo no se destacó por su exquisita habilidad, sino por su condición de formidable goleador, lo que para un futbolista que desempeñó toda su campaña como puntero izquierdo representa todavía más un mérito mayúsculo. Manuel Pelegrina contó como recurso para transformarse en el wing con más goles en la historia del fútbol argentino con la extraordinaria potencia de sus remates.</p>
					
					<p>Mediante esta virtud, Pelegrina anotó muchos tantos de tiro libre. Además resultó ser un gran ejecutor de penales, porque sobre los 48 remates de los doce pasos que pateó transformó en gol 39 (una efectividad del 81,2 por ciento). Al margen de ser un formidable goleador, el Payo se destacó en el campo de juego por su conducta ejemplar.
						
					Otra cualidad de Payo Pelegrina, es que solamente abandonó Estudiantes por una temporada (1953) al marcharse a Huracán donde jugó junto a Eduardo Ricagni y también con Elio Montaño. Ese año Estudiantes descendería a la segunda categoría, luego de la intervención del gobierno de Perón.</p>
					
					<p>Manuel Pelegrina no tardó mucho en regresar a Estudiantes, ya que al año siguiente colaboró para que el equipo albirrojo volviera a jugar en Primera División al consagrarse campeón de la “B”, donde marcó 14 goles, siendo el máximo anotador de Estudiantes en la temporada. Luego actuó sendas temporadas más para dejar de jugar en la categoría superior por dos temporadas. Ya de veterano pasó a Defensores de Cambaceres a pedido de Alberto Zozaya, que era el técnico del equipo de Ensenada que militaba en la Primera “C”.</p>
				
					<p>Si se toman en cuenta las dos categoría es el hombre con más presencias con la camiseta de Estudiantes con un total de 489 partidos. Superando incluso a Abel Ernesto Herrera, quien jugó 467 partidos, pero todos en la primera división.
						
					Entre tanto solamente en cuatro ocasiones pudo ponerse la camiseta del seleccionado argentino en donde convirtió 2 goles. En ese momento tuvo que “convivir” con otros punteros izquierdos de excepcional calidad como Enrique García, Félix Loustau y Ezra Sued que le impidieron mostrar sus condiciones en el representativo nacional.</p>
				
					<p>El Payo murió en 23 de noviembre de 1992 en La Plata, a causa de una neumonía, aunque el cañonero del gol estará en la memoria de quienes lo vieron jugar y, sin dudas, en la historia de los grandes goleadores del fútbol argentino. </p>
				</article>
				
				<article id="jrveron" class="jugador">
					<div class="separacionSuperior"></div>
					<h2>Juan Ram&oacute;n Ver&oacute;n</h2>
					<div class="pull-left">
						<img src="{{URL::asset('images/idolos/jrveron.jpg')}}" alt="JuanRamonVeron" class="img-responsive img-thumbnail">
					</div>
				
					<p>Juan Ramón Verón, nacido en La Plata el 17 de marzo de 1944. La Bruja Verón sufrió y gozó como ninguno todas las épocas modernas de la historia del León. Por eso merece el rótulo de uno de los mayores ídolos de la historia. Porque su corazón hace más de cuarenta años que palpita al compás de la vida del Pincha. Y eso que esta historia no fue toda color de rosa. Sus comienzos no fueron para nada fáciles. Luego de debutar ante Boca el 12 de diciembre de 1962 (con un O-4 en contra), debió alternar entre la reserva y la Primera, hasta explotar en 1967.</p>
					
					<p>Seguramente, mucho de su potencial afloró luego de las largas charlas que tuvo con Osvaldo Zubeldía luego de su arribo al club en enero de 1965. Tanto influyó la llegada del DT que a las pocas semanas de haber arribado al club, Verón marco su primer gol ante Banfield, el 1 de abril de 1965.</p>
				
					<p>El entrenador tenia muy en claro que Juan era muy desequilibrante. Aunque a veces la platea techada no entendía lo mismo y se la agarraba con el fantasista del equipo. Pero Zubeldía no se dejaba amedrentar y mandaba a Verón a jugar por la banda contraria, cerca de la platea de calle 1. 
					Pasó el tiempo y su rendimiento creció en forma impresionante. Entonces, la Bruja fue el arma letal del Estudiantes campeón de todo. Siempre dijo presente, especialmente en los partidos mas chivos, cuando más lo necesitaban sus companeros, el entrenador... y los hinchas. Por algo el mismísimo Ferenc Puskas dijo que nunca un jugador lo deslumbró tanto... 
					Nadie se olvida de sus goles a San Lorenzo, Platense, Manchester y Palmeiras, entre otros.</p>
				
					<p>Todo lo que sucede en la vida de Estudiantes necesariamente se relaciona con la vida de Juan, como le dicen todos en el Mundo Pincha. Entonces, no es casualidad que su hijo Juan Sebastián haya nacido justamente el día que su papa le convirtió un gol a Gimnasia, en el 3-3 del 9 de marzo de 1975. 
						
					La Bruja jamás dejó de estar unido al club. Ni cuando se fue al Panathinaikos de Grecia entre 1972 y 1974. Tampoco cuando se marchó a Colombia entre 1976 y 1979. Se ausentó por un tiempo, pero su corazón nunca se fue. De hecho, volvió para terminar su carrera en el club de sus amores en 1980. El 22 de noviembre de 1981 se retiró y siguió ligado al pincha para siempre.</p>
				
					<p>En Estudiantes, Verón jugó 324 partidos, convirtiendo 90 goles. En toda su carrera, Verón disputó 506 partidos, marcando 168 goles; lo que le otorga una efectividad 0,33 goles por partido.
				
					En Estudiantes logró 6 títulos, 1 a nivel local, y 5 internacionales:
						<ul>
							<li>Torneo Metropolitano 1967</li>
							<li>Copa Libertadores de América 1968</li>
							<li>Copa Intercontinental 1968</li>
							<li>Copa Interamericana 1969</li>
							<li>Copa Libertadores de América 1969</li>
							<li>Copa Libertadores de América 1970</li>
						</ul>
					</p>
				</article>
				
				<article id="jsveron" class="jugador">
					<div class="separacionSuperior"></div>
					<h2>Juan Sebasti&aacute;n Ver&oacute;n</h2>
					<div class="pull-left">
						<img src="{{URL::asset('images/idolos/jsveron.jpg')}}" alt="JuanSebastianVeron" class="img-responsive img-thumbnail">
					</div>
				
					<p>Nació en La Plata el 9 de marzo de 1975 y es hijo del ex futbolista Juan Ramón “La Bruja” Verón de ascendencia Franco-Española y la ama de casa Cecilia Portela de ascendencia Italiana.
				
					Debutó en Estudiantes de La Plata en 1994. El año de su debut en primera su equipo descendió al Nacional B formando parte del un equipo que logró retornar a la primera categoría en tan solo 7 meses.
				
					De vuelta a primera división y con unos pocos partidos jugados fue transferido a Boca Juniors y luego al Sampdoria. </p>
				
					<p>En 1998 se sumó al Parma, formando uno de los mejores equipos de los años noventa donde ganó la Copa Italia y la Copa UEFA en 1999, escribiendo una de las mejores etapas de la historia del club parmesano. 
						
					Tras esta gloriosa temporada Verón termina por recalar en la Lazio en el verano de 1999, donde ganó una Copa Italia y una Supercopa.</p>
				
					<p>Entre 2001 y 2003 perteneció al Manchetster United, equipo con el que logró ganar la Liga Premier para luego ser transferido al Chelsea y un año después en 2004, cedido en préstamo al Inter de Milán donde jugó hasta finalizar la temporada 2005-06, ganando la Copa Italia en dos oportunidades.
						
					A partir de ese momento, volvió al club que lo vio nacer, Estudiantes de La Plata. Donde logró el título del Torneo Apertura 2006-07, luego de una definición contra Boca Juniors ya que, durante el torneo, ambos equipos habían terminados en igualdad de puntos. A comienzos del año 2008, fue sondeado por el equipo D.C. United de los Estados Unidos para sumarse al plantel, pero Verón desestimó la propuesta para continuar en Estudiantes de La Plata, rechazando una millonaria propuesta. </p>
				
					<p>En 2009 alzó la Copa Libertadores luego que Estudiantes venciera en la final y como visitante, a Cruzeiro de Belo Horizonte por 2-1 y luego de un empate en 0 como local, siendo considerado por la CONMEBOL el "mejor jugador de la final", y posteriormente "mejor jugador de la Copa Libertadores".
						
					Ganó también con Estudiantes de La Plata el torneo apertura 2010 y tras su programado retiro en 2011, anunció que permanecería 6 meses más en el plantel pincha para luego ser presentado, el 29 de junio del corriente 2012, como jugador de la Asociación Coronel Brandsen de la Liga Amateur Platense de Futbol.</p>
				
					<p>La Brujita Verón integró los seleccionados nacionales que participaron de los mundiales 1998, 2002 y 2010.
					Ganador de 13 torneos nacionales de Argentina, Inglaterra e Italia y 3 Copas internacionales con Estudiantes de La Plata. La Brujita Verón ha sido, además, galardonado con el Olimpia de Plata en 2 ocasiones entre otras distinciones nacionales e internacionales.</p>
				</article>
			</section>
		</div>

		@include('footer/footer')
	@endsection