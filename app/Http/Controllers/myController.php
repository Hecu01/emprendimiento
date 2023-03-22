<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{

    public function welcome(){
    	$title = 'Sitio Web - Bienvenida';
    	return view('welcome', compact('title'));
    }

    public function betsob(){
    	$title = 'Betsob - Sitio Web';
    	return view('betsob.home-betsob', compact('title'));
    }
    public function perfectec(){
    	$title = 'Sitio Web - Perfectec';
    	return view('perfectec', compact('title'));
    }
    public function vyc(){
    	$title = 'Sitio Web - V&C';
    	return view('vyc-nails', compact('title'));
    }

    public function myblog(){
    	$title = 'Sitio Web - Urbine01';
    	return view('blog', compact('title'));
    }
}
