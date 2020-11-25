<?php

namespace App\Http\Controllers\Gatos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Gatos extends Controller
{
    public function informacion(){
    	return view('gatos/gatos');
    }

    public function productos(){
    	$mensaje1 = "Rascador Gato";
    	$datos1 = [
    		'Codigo: 777',
    		'Precio: $15600'
    	];
    	
    	$mensaje2 = "Comedero Doble";
    	$datos2 = [
    		'Codigo: 888',
    		'Precio: $6000'
    	];
    	
    	$mensaje3 = "Cama Trebol";
    	$datos3 = [
    		'Codigo: 999',
    		'Precio: $83500'
    	];

    	$mensaje4 = "Cepillo Rubber";
    	$datos4 = [
    		'Codigo: 1010',
    		'Precio: $10000'
    	];

    	$mensaje5 = "Kit #3 Gato";
    	$datos5 = [
    		'Codigo: 1111',
    		'Precio: $45080'
    	];

    	$mensaje6 = "Guacal Pequeño";
    	$datos6 = [
    		'Codigo: 1212',
    		'Precio: $59000'
    	];
    	
    	return view('gatos.productos',[
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
