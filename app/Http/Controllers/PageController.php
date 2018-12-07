<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigurationModel;
use Imagick;

class PageController extends Controller {
    private $configuration;
    private $banner;
    public function __construct(){
        $this->configuration = ConfigurationModel::first();
        $this->banner = !empty($this->configuration->img_header_path) ? $this->prepararImagem(storage_path($this->configuration->img_header_path)) : null;
    }

    public function index(){

        return view('index')
            ->with('configuration', $this->configuration)
            ->with('banner', $this->banner);
    }

    public function gallery(){
        $titulo = 'Galeria';

        return view('gallery')
            ->with('titulo', $titulo)
            ->with('configuration', $this->configuration)
            ->with('banner', $this->banner);
    }

    public function category($id){
        $titulo = 'Galeria';

        return view('gallery')
            ->with('titulo', $titulo)
            ->with('configuration', $this->configuration)
            ->with('banner', $this->banner);
    }

    public function about(){
        $titulo = 'Galeria';

        return view('gallery')
            ->with('titulo', $titulo)
            ->with('configuration', $this->configuration)
            ->with('banner', $this->banner);
    }

    public function contact(){
        $titulo = 'Galeria';

        return view('gallery')
            ->with('titulo', $titulo)
            ->with('configuration', $this->configuration)
            ->with('banner', $this->banner);
    }

    private function prepararImagem($arquivo){
        if (file_exists($arquivo)) {
            $imagick = new Imagick($arquivo);

            $imagick->setImageFormat('png');
            $imagick->resizeImage(1920, 900, 0, 1, true);

            return 'data:image/png;base64,' . base64_encode($imagick);
        }
    }
}
