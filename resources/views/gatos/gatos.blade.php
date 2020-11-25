@extends('layouts.master')
@section('content')
	<div>
		<br><h1 align="center" style="color: green"><strong>TUS FELINOS FAVORITOS</strong></h1><br><br>
		<h3 align="left" style="color: red"><strong>Historia</strong></h3><br>
		<h5 align="justify"><strong>El gato doméstico (Felis silvestris catus), llamado popularmente gato, y de forma coloquial minino, michino, michi, micho, mizo,​ miz, morroño o morrongo, entre otros nombres, es un mamífero carnívoro de la familia Felidae. Es una subespecie domesticada por la convivencia con el ser humano. El nombre actual en muchas lenguas proviene del latín vulgar catus. Paradójicamente, catus aludía a los gatos salvajes, mientras que los gatos domésticos, en latín, eran llamados felis.</strong></h5><br>
		<h3 align="left" style="color: red"><strong>Caracteristicas</strong></h3><br>
		<h5 align="justify"><strong>Los gatos se encuentran distribuidos a nivel mundial. En la actualidad, podemos hablar de un hábitat del gato doméstico, que sería aquel correspondiente a los ejemplares que viven cuidados por los humanos en sus hogares, y otros gatos, considerados salvajes, que se encuentran en entornos naturales sin contacto con personas. Además, alrededor de los núcleos humanos permanecen gatos callejeros que se buscan la vida sin que ninguna persona se responsabilice directamente de ellos. En esas condiciones los gatos solo sobreviven.<br><br>Debemos tener en cuenta las características del gato para que la convivencia en nuestro hogar sea exitosa. Para ello, es necesario disponer de utensilios imprescindibles como un arenero con pala, un rascador, un comedero, un bebedero y una comida adaptada a las necesidades nutricionales del gato según su etapa vital. Además, conviene proporcionarle entretenimiento, para lo que encontraremos múltiples juguetes a la venta, y un ambiente donde pueda trepar, esconderse, descansar, etc.<br><br>En la actualidad hay estandarizadas y registradas más de 100 razas de gatos. Las razas más antiguas tenían el pelo corto y son las descendientes de los gatos que los romanos extendieron por Europa. El primer gato de pelo largo fue el de angora, procedente de Turquía. El siguiente fue el muy famoso persa, de Asia Menor. Desde el Extremo Oriente llegó el siamés, a la vez que, de Rusia, se difundió el azul ruso y de Etiopía el abisinio.<br><br>Las características del gato, en lo fundamental, no van a variar de una raza a otra, pero sí podemos encontrar ciertos rasgos más típicos de unas o de otras. Es conveniente que nos informemos antes de adoptar. Según la Federación Internacional Felina, las razas de gatos se agrupan en cuatro categorías, que son las siguientes:<br><br><li>Categoría I: persas y exóticos como el ragdoll.</li><li>Categoría II: pelo semilargo como el bosque de Noruega, el siberiano o el angora.</li><li>Categoría III: pelo corto como el bengalí, el cartujo, el europeo o el Manx.</li><li>Categoría IV: siameses y orientales como el abisinio, el esfinge, el devon rex, el azul ruso o el balinés.</li></strong></h5><br>
	</div>
	<h3 align="left" style="color: red"><strong>Fotos</strong></h3><br>
	<div align="center">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<img src="{{url('imagenes/11.jpg')}}" height="480" width="1100" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="{{url('imagenes/12.jpg')}}" height="480" width="1100" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="{{url('imagenes/13.jpg')}}" height="480" width="1100" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="{{url('imagenes/14.jpg')}}" height="480" width="1100" class="d-block w-100">
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