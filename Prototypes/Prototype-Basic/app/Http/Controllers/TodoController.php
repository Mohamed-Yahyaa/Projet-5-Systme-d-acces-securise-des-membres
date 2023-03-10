<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth')->except(['index']);
            // OR
            $this->middleware('auth')->only(['store','update','edit','create']);
    }

    //
    public function index (){
        $todo = Todo::all();
        return view("index",compact('todo'));
    }

    public function create(){
      return view ("create");
    }

    public function store(Request $request){
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();
        if( $todo->save()){
            return redirect('todo');
            }

    }
}
