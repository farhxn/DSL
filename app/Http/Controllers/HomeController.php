<?php

namespace App\Http\Controllers;

use App\Models\taska;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function tasks(){
        $ur = User::all();
        $as = taska::where([['assigned_to','=',auth()->id()]])->first();
        $sa = taska::where([['assigned_to','=',auth()->id()]])->count();
        $dr = taska::where([['assigned_to','=',auth()->id()]])->count();
        $cr = taska::all();
        return view('pages.tasks',compact('cr','ur','as','dr'));
    }


    public function storeTask(Request $request){
        $task = new taska();
        $task->name=$request->title;
        $task->description=$request->description;
        $task->date=$request->dueDate;
        $task->end_time=$request->startTime;
        $task->start_time=$request->endTime;
        $task->assigned_to=$request->assign;
        $task->created_by=auth()->id();
        $task->status=' ';
        $task->save();
        return redirect()->back();
    }
}


