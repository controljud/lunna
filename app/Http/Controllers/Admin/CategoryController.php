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
            'title' => 'Categorias'
        ];
    }

    public function index(){
        $user = Auth::user();
        $categories = CategoryModel::orderBy('title', 'asc')->paginate(15);

        return view('admin.category.index', $this->data)
            ->with('categories', $categories)
            ->with('user', $user);
    }

    public function create(){
        $user = Auth::user();

        return view('admin.category.edit', $this->data)
            ->with('user', $user);
    }

    public function edit($id){
        $user = Auth::user();
        $category = CategoryModel::find($id);

        return view('admin.category.edit', $this->data)
            ->with('category', $category)
            ->with('user', $user);
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
