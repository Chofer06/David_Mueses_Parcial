@extends('layouts.master')
@section('content')
	<br><h1 align="center" style="color: green"><strong>NUESTROS PRODUCTOS</strong></h1><br><br>
	<div>
		<div class="card-deck">
		  <div class="card">
		    <img src="{{url('imagenes/15.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Rascador Gato</strong></h5>
		      <p class="card-text">Codigo: 777</p>
		      <p class="card-text">Precio: $ 15600</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/16.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Comedero Doble</strong></h5>
		      <p class="card-text">Codigo: 888</p>
		      <p class="card-text">Precio: $ 6000</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>

		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/17.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Cama Trebol</strong></h5>
		      <p class="card-text">Codigo: 999</p>
		      <p class="card-text">Precio: $ 83500</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		</div>
	</div><br>
	<div>
		<div class="card-deck">
		  <div class="card">
		    <img src="{{url('imagenes/18.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Cepillo Rubber</strong></h5>
		      <p class="card-text">Codigo: 1010</p>
		      <p class="card-text">Precio: $ 10000</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/19.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Kit #3 Gato</strong></h5>
		      <p class="card-text">Codigo: 1111</p>
		      <p class="card-text">Precio: $ 45080</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/20.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>Guacal Pequeño</strong></h5>
		      <p class="card-text">Codigo: 1212</p>
		      <p class="card-text">Precio: $ 59000</p>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		</div>
	</div>
	
@stop