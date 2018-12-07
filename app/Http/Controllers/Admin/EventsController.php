<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EventModel;
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
}
