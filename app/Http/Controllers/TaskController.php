<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
    public function show(){
    	$tasks = Task::all();
    	return view("pages.home")->with("tasks", $tasks);
    }

    public function insert(Request $request){

    	$task = new Task();

    	$task->task_column = $request->task_input;
    	$task->done = false;
    	$task->save();
    	return redirect()->route('frontpage');

    }

    public function edit($id){
    	// return $id;
    	$task = Task::find($id);
    	return view("pages.edit")->with("task", $task);
    }

    public function update(Request $request, $id){
    	$task = Task::find($id);
    	$task->task_column = $request->task_input;
    	$task->save();
    	return redirect()->route('frontpage');
    }

    public function delete(Request $request, $id){
	    $task = Task::find($id);
	    $task->delete();
	    return redirect()->route('frontpage');
    }

    public function done(Request $request, $id){
		$task = Task::find($id);
		$task->done=1;
		$task->save();
    	return redirect()->route('frontpage');
	}
}
