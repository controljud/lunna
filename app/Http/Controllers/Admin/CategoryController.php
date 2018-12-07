<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Auth;

class CategoryController extends Controller{
    private $data;

    public function __construct(){
        $this->middleware('auth');
        $this->data = [
            'user' => Auth::user(),
            'title' => 'Categorias'
        ];
    }

    public function index(){
        $categories = CategoryModel::orderBy('title', 'asc')->get();

        return view('admin.category.index', $this->data)
            ->with('categories', $categories);
    }

    public function edit($id){
        $category = CategoryModel::find($id);

        return view('admin.category.edit', $this->data)
            ->with('category', $category);
    }

    public function store(Request $request){
        $data = $request->all();
        $category = CategoryModel::findOrNew($data['id']);
        $category->fill($data);
        $category->save();

        return redirect()->action('Admin\CategoryController@index')
            ->with('message', ['type' => 'success', 'title' => 'Sucesso', 'message' => 'Categoria salva com sucesso']);
    }
}
