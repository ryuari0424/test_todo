<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
// use Illuminate\Http\Requests\TodoPostRequest;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::sortable()->get();

        return view('index', ['todos' => $todos]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:4'
        ]);

        $todo =  $request->only(['title', 'memo']);

        Todo::create($todo);

        return redirect()->route('index');

    }

    public function destroy(Todo $id){
        $todo = Todo::find($id);
        $todo->each->delete();

        return redirect()->route('index');
    }
}


