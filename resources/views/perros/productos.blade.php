@extends('layouts.master')
@section('content')
	<br><h1 align="center" style="color: green"><strong>NUESTROS PRODUCTOS</strong></h1><br><br>
	<div>
		<div class="card-deck">
		  <div class="card">
		    <img src="{{url('imagenes/5.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>{{ $msg1 }}</strong></h5>
		      <ul>
		      	@foreach($prod1 as $p1)
		      		<li>{{ $p1 }}</li>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/6.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>{{ $msg2 }}</strong></h5>
		      <ul>
		      	@foreach($prod2 as $p2)
		      		<li>{{ $p2 }}</li>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>

		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/7.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>{{ $msg3 }}</strong></h5>
		      <ul>
		      	@foreach($prod3 as $p3)
		      		<li>{{ $p3 }}</li>
			  	@endforeach
		      </ul>
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
		      <h5 class="card-title" align="center"><strong>{{ $msg4 }}</strong></h5>
		      <ul>
		      	@foreach($prod4 as $p4)
		      		<li>{{ $p4 }}</li>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/9.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>{{ $msg5 }}</strong></h5>
		      <ul>
		      	@foreach($prod5 as $p5)
		      		<li>{{ $p5 }}</li>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/10.jpg')}}" class="d-block w-100">
		    <div class="card-body">
		      <h5 class="card-title" align="center"><strong>{{ $msg6 }}</strong></h5>
		      <ul>
		      	@foreach($prod6 as $p6)
		      		<li>{{ $p6 }}</li>
			  	@endforeach
		      </ul>
		      <button type="button" class="btn btn-success">COMPRAR</button>
		    </div>
		  </div>
		</div>
	</div>
	
@stop