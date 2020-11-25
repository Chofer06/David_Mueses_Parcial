@extends('layouts.master')
@section('content')
	<br><h1 align="center" style="color: green"><strong>NUESTROS PRODUCTOS</strong></h1><br><br>
	<div>
		<div class="card-deck">
		  <div class="card">
		    <img src="{{url('imagenes/5.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Alimento Para Perro</strong></h5>
		      <p class="card-text">Codigo: 111</p>
		      <p class="card-text">Precio: $ 5600</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/6.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Comedero Doble</strong></h5>
		      <p class="card-text">Codigo: 222</p>
		      <p class="card-text">Precio: $ 8900</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>

		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/7.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Bozal Ciliconado</strong></h5>
		      <p class="card-text">Codigo: 333</p>
		      <p class="card-text">Precio: $ 19500</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		</div>
	</div><br>
	<div>
		<div class="card-deck">
		  <div class="card">
		    <img src="{{url('imagenes/8.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Paracaidas</strong></h5>
		      <p class="card-text">Codigo: 444</p>
		      <p class="card-text">Precio: $ 16500</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/9.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Cama Acolchada</strong></h5>
		      <p class="card-text">Codigo: 555</p>
		      <p class="card-text">Precio: $ 110900</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/10.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Guantes</strong></h5>
		      <p class="card-text">Codigo: 666</p>
		      <p class="card-text">Precio: $ 10000</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		</div>
	</div>
	
@stop