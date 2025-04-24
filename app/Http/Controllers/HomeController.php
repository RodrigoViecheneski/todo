<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task;

class HomeController extends Controller
{
    public function index(Request $request){
        //$tasks = Task::all()->take(3);
        $data['tasks'] = Task::whereDate('due_date', date('Y-m-d'))->get();
        //$data['tasks'] = Task::whereDate('due_date', date('Y-m-d'));
        //dd($data['tasks']);
        $data['AuthUser'] = Auth::user();

        $data['tasks_count'] = $data['tasks']->count();
        $data['undone_tasks_count'] = $data['tasks']->where('is_done', false)->count();
        return view('home', $data);
    }
}
