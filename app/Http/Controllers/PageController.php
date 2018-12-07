<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigurationModel;
use App\Models\CategoryModel;
use Imagick;

class PageController extends Controller {
    private $data;

    public function __construct(){
        $configuration = ConfigurationModel::first();
        $categories = CategoryModel::orderBy('title', 'asc')->get();
        $banner = !empty($configuration->img_header_path) ? $this->prepararImagem(storage_path($configuration->img_header_path)) : null;

        $this->data = [
            'configuration' => $configuration,
            'banner' => $banner,
            'categories' => $categories
        ];
    }

    public function index(){

        return view('index', $this->data);
    }

    public function gallery(){
        $titulo = 'Galeria';

        return view('gallery', $this->data)
            ->with('titulo', $titulo);
    }

    public function category($id){
        $titulo = 'Galeria';

        return view('gallery', $this->data)
            ->with('titulo', $titulo);
    }

    public function about(){
        $titulo = 'Galeria';

        return view('gallery', $this->data)
            ->with('titulo', $titulo);
    }

    public function contact(){
        $titulo = 'Galeria';

        return view('gallery', $this->data)
            ->with('titulo', $titulo);
    }

    private function prepararImagem($arquivo){
        if (file_exists($arquivo)) {
            $imagick = new Imagick($arquivo);

            $imagick->setImageFormat('png');
            //$imagick->resizeImage(400, 300, 0, 1, true);

            return 'data:image/png;base64,' . base64_encode($imagick);
        }
    }
}
