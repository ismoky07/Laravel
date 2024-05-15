<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks.index',['tasks'=>$tasks]);
    }
    public function create(){
        return view('tasks.create');

    }
    public function list(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required',
        ]);
        $newTask = Task::create($data);

        return redirect(route('task.index'));
    }
    public function edit(Task $task) {

        return view('tasks.edit',['task'=>$task]);


    }
    public function update(Request $request, Task $task) {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required',
        ]);
        $task->update($data);
        return redirect(route('task.index'))->with('success','Task updated successfully');
    }
    public function delete(Task $task) {
        $task->delete();
        return redirect(route('task.index'))->with('success','Task deleted successfully');
    }
}
