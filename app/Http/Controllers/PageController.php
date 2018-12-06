<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    public function index(){
        return view('index');
    }

    public function gallery(){
        $titulo = 'Galeria';

        return view('gallery')
            ->with('titulo', $titulo);
    }

    public function category($id){

    }

    public function about(){

    }

    public function contact(){

    }
}
