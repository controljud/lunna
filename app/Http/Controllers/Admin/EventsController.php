<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class EventsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $title = 'Eventos';

        return view('admin.events.index')
            ->with('user', $user)
            ->with('title', $title);
    }
}
