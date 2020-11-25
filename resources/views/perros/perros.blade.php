@extends('layouts.master')
@section('content')
	<div>
		<br><h1 align="center" style="color: green"><strong>TUS CANINOS FAVORITOS</strong></h1><br><br>
		<h3 align="left" style="color: red"><strong>Historia</strong></h3><br>
		<h5 align="justify"><strong>El perro es uno de los animales domésticos más antiguos del mundo y el mejor amigo del hombre. Su domesticación comienza cuando apenas era un pariente salvaje de los actuales lobos (Canis lupus), existiendo pruebas arqueológicas que confirman su existencia como animal doméstico. Toda la especie se refiere a la raza doméstica (Canis lupus familiaris) aunque algunos científicos sostienen que el perro es una subespecie de lobo.</strong></h5><br>
		<h3 align="left" style="color: red"><strong>Caracteristicas</strong></h3><br>
		<h5 align="justify"><strong>Los perros llevan con los humanos miles de años, acompañándonos y siendo no solo nuestras mascotas, sino también nuestros defensores y compañeros de caza. En un primer momento, estos animales habían sido salvajes, muy cercanos a cómo viven actualmente una especie que se consideran de la misma familia como son los lobos, los zorros, entre otros. Sin embargo, gracias a la interacción constante con las personas, a los cuidados que estos les daban a los perros, fueron cada vez más acercándose a estos, terminando por criarlos y domesticarlos para las funciones anteriormente descritas.<br><br>Las características físicas de los perros van a venir determinadas por la raza de la que hablemos, pero por lo general, van a contar con cuatro patas, siendo las traseras las más fuertes y con las que mejor van a caminar, ayudándole estas para saltar en cualquier caso que lo necesiten. Tienen un hocico alargado en la mayoría de los casos, con unos dientes afilados y grandes molares, que les ayudan a masticar mejor.<br><br>Los ojos de estos animales no son excesivamente grandes, y aunque ven relativamente bien, se van a dejar guiar más por su olfato como también por su oído. Por otro lado, su cuerpo es alargado con una cabeza separada del cuerpo por un cuello fuerte. Para terminar, poseen una cola larga que les ayuda a equilibrarse cuando van corriendo o simplemente andan, pero que también les ayuda para comunicar su estado de ánimo, desde que están contentos hasta que sienten miedo, todo esto puede ser detectado con la cola.<br><br>Otro de los datos curiosos de estos animales es su lengua, ya que cuando están cansados o sienten calor, sacan la lengua con la que regulan la temperatura corporal y se sienten mejor. </strong></h5><br>
	</div>
	<h3 align="left" style="color: red"><strong>Fotos</strong></h3><br>
	<div align="center">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<img src="{{url('imagenes/2.jpg')}}" height="480" width="1100" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="{{url('imagenes/3.jpg')}}" height="480" width="1100" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="{{url('imagenes/4.jpg')}}" height="480" width="1100" class="d-block w-100">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div><br><br>
@stop