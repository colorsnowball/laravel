<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        //$tasks = Task::all();
        $tasks = Task::latest()->get();

        return view('tasks.index',[
            'tasklist' => $tasks
        ]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(){
        //create , creeated  차이?
//        $task = Task::create([
//            'title' => request('title')
//            ,'body' => $request->input('body')
//        ]);

        request() -> validate(['title' => 'required','body' => 'required']);
        $task = Task::create(request(['title','body']));

        //return redirect("/tasks");
        return redirect('/tasks/'.$task -> id);
    }

//    public function show($id){
//        return view('tasks.show', ['taskVals' => Task::findOrFail($id)]);
//
//    }

      public  function show(Task $id){
        return view('tasks.show',['taskVals' =>  $id]);
      }

      public  function edit(Task $id){
        return view('tasks.edit',[
           'taskVal' => $id
        ]);

      }

      public function update(Task $id){

        request() -> validate(['title' => 'required','body' => 'required']);
        $id -> update(request(['title','body']));

        return redirect('/tasks/'.$id -> id);

      }

      public function destroy(Task $id){
        $id -> delete();

        return redirect('/tasks');

      }
}
