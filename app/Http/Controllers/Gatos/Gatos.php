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
    	return view('gatos/productos');
    }
}
