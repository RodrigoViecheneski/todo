<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index(Request $request){
        //$tasks = Task::all()->take(3);
        if($request->date){
            $filteredDate = $request->date;
        }else{
            $filteredDate = date('Y-m-d');
        }
        $carbonDate = Carbon::createFromDate($filteredDate);

        $data['date_as_string'] = $carbonDate->translatedFormat('d').' de '.ucfirst($carbonDate->translatedFormat('M'));
        $data['date_prev_button'] = $carbonDate->addDay(-1)->format('Y-m-d');
        $data['date_next_button'] = $carbonDate->addDay(2)->format('Y-m-d');
        $data['tasks'] = Task::whereDate('due_date', $filteredDate)->get();
        //$data['tasks'] = Task::whereDate('due_date', date('Y-m-d'));
        //dd($data['tasks']);
        $data['AuthUser'] = Auth::user();

        $data['tasks_count'] = $data['tasks']->count();
        $data['undone_tasks_count'] = $data['tasks']->where('is_done', false)->count();
        return view('home', $data);
    }
}
