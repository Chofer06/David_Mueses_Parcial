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
    	return view('perros/productos');
    }
}
