<?php

namespace App\Http\Controllers\Admin;

use App\Models\ConfigurationModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ConfigurationModel as Configuration;
use Illuminate\Support\Facades\Input;
use Imagick;
use Auth;

class ConfigurationController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $title = 'Configuração';

        $configuration = Configuration::first();
        $image = !empty($configuration->img_header_path) ? $this->prepararImagem(storage_path($configuration->img_header_path)) : null;

        return view('admin.configuration.index')
            ->with('user', $user)
            ->with('title', $title)
            ->with('image', $image)
            ->with('configuration', $configuration);
    }

    public function store(Request $request){
        $configuration = ConfigurationModel::first();
        $configuration->title = $request->title;
        $configuration->description = $request->description;

        //Image
        if (Input::file()) {
            $image = Input::file('img_header');
            $name_banner = time() . '.' . $image->getClientOriginalExtension();
            $path = 'configuration/' . $name_banner;
            Input::file('img_header')->move(storage_path('configuration/'), $name_banner);
            $configuration->img_header_path = $path;
        }

        $configuration->save();

        return redirect()->action('Admin\ConfigurationController@index')
            ->with('message', ['type' => 'success', 'title' => 'Sucesso', 'message' => 'Configuração salva com sucesso']);
    }

    private function prepararImagem($arquivo){
        if (file_exists($arquivo)) {
            $imagick = new Imagick($arquivo);

            $imagick->setImageFormat('png');
            $imagick->resizeImage(500, 320, 0, 1, true);

            return 'data:image/png;base64,' . base64_encode($imagick);
        }
    }
}
