<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigurationModel;

class PageController extends Controller {
    private $configuration;
    public function __construct(){
        $this->configuration = ConfigurationModel::first();
    }

    public function index(){

        return view('index')
            ->with('configuration', $this->configuration);
    }

    public function gallery(){
        $titulo = 'Galeria';

        return view('gallery')
            ->with('titulo', $titulo)
            ->with('configuration', $this->configuration);
    }

    public function category($id){
        $titulo = 'Galeria';

        return view('gallery')
            ->with('titulo', $titulo)
            ->with('configuration', $this->configuration);
    }

    public function about(){
        $titulo = 'Galeria';

        return view('gallery')
            ->with('titulo', $titulo)
            ->with('configuration', $this->configuration);
    }

    public function contact(){
        $titulo = 'Galeria';

        return view('gallery')
            ->with('titulo', $titulo)
            ->with('configuration', $this->configuration);
    }
}
