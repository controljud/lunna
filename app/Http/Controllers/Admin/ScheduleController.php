<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ScheduleController extends Controller
{
    public function index(){
        $user = Auth::user();
        $title = 'Agenda';

        return view('admin.schedule.index')
            ->with('user', $user)
            ->with('title', $title);
    }

    public function create(){
        $user = Auth::user();
        $title = 'Agenda';

        return view('admin.schedule.index')
            ->with('user', $user)
            ->with('title', $title);
    }
}
