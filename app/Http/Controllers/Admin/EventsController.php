<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EventModel;
use App\Models\CategoryModel;
use Auth;

class EventsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $title = 'Eventos';

        $events = EventModel::orderBy('title', 'asc')->paginate(15);

        return view('admin.events.index')
            ->with('user', $user)
            ->with('title', $title)
            ->with('events', $events);
    }

    public function create(){
        $categories = CategoryModel::orderBy('title', 'asc')->get();

        $user = Auth::user();
        $title = 'Eventos - Novo';

        return view('admin.events.edit')
            ->with('user', $user)
            ->with('title', $title)
            ->with('categories', $categories);
    }

    public function edit($id){
        $categories = CategoryModel::orderBy('title', 'asc')->get();
        $event = EventModel::find($id);

        $user = Auth::user();
        $title = 'Eventos - Editar';

        return view('admin.events.edit')
            ->with('user', $user)
            ->with('title', $title)
            ->with('categories', $categories);
    }

    public function store(Request $request){

        return redirect()->action('Admin\EventsController@index')
            ->with('message', ['type' => 'success', 'title' => 'Sucesso', 'message' => 'Evento salvo com sucesso']);
    }
}
