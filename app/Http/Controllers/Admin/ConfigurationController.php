<?php

namespace App\Http\Controllers\Admin;

use App\Models\ConfigurationModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ConfigurationModel as Configuration;
use Auth;

class ConfigurationController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $title = 'Configuração';

        $configuration = Configuration::first();

        return view('admin.configuration.index')
            ->with('user', $user)
            ->with('title', $title)
            ->with('configuration', $configuration);
    }

    public function store(Request $request){
        $configuration = ConfigurationModel::first();

        //Image
        if($request->hasFile('img_header_path') && $request->file('img_header_path')->isValid()){
            $name = uniqid(date('HisYmd'));
            $extension = $request->image->extension();
            $nameFile = "{$name}.{$extension}";

            $upload = $request->image->storeAs('configuration', $nameFile);

            if(!$upload){
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
            }
        }

        return redirect()->action('Admin\ConfigurationController@index');
    }
}
