<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $task = Task::orderBy('id','ASC')->get();
        return view('task', [
            'tasks' => $task
        ]);
    }
    public function addTask(Request $req){
        $validator = Validator::make($req->all(),[
            'name' => 'required|max:255',
        ]);
        if ($validator->fails()){
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        $task = new Task();
        $task->name = $req->name;
        $task->save();
        return redirect('/');
    }
    public function deleteTask(Task $task){
        $task->delete();

        return redirect('/');
    }
}
