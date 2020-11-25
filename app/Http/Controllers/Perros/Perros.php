<?php

namespace App\Http\Controllers\Perros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Perros extends Controller
{
    public function informacion(){
    	return view('perros/perros');
    }

    public function productos(){
    	$mensaje1 = "Alimento Para Perro";
    	$datos1 = [
    		'Codigo: 111',
    		'Precio: $5600'
    	];
    	
    	$mensaje2 = "Comedero Doble";
    	$datos2 = [
    		'Codigo: 222',
    		'Precio: $8900'
    	];
    	
    	$mensaje3 = "Bozal Ciliconado";
    	$datos3 = [
    		'Codigo: 333',
    		'Precio: $19500'
    	];

    	$mensaje4 = "Paracaidas";
    	$datos4 = [
    		'Codigo: 444',
    		'Precio: $16500'
    	];

    	$mensaje5 = "Cama Acolchada";
    	$datos5 = [
    		'Codigo: 555',
    		'Precio: $110900'
    	];

    	$mensaje6 = "Guantes";
    	$datos6 = [
    		'Codigo: 333',
    		'Precio: $10000'
    	];
    	
    	return view('perros.productos',[
    		'prod1' => $datos1,
    		'msg1' => $mensaje1,
    		'prod2' => $datos2,
    		'msg2' => $mensaje2,
    		'prod3' => $datos3,
    		'msg3' => $mensaje3,
    		'prod4' => $datos4,
    		'msg4' => $mensaje4,
    		'prod5' => $datos5,
    		'msg5' => $mensaje5,
    		'prod6' => $datos6,
    		'msg6' => $mensaje6
    	]);
    }
}
